<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Pines\Contracts\PinRepositoryInterface;
use App\Models\Pines;
use Illuminate\Support\Collection;

class EloquentPinRepository implements PinRepositoryInterface
{
    public function existsByPin(string $pin): bool
    {
        return Pines::where('pin', $pin)->exists();
    }

    public function findIdByPinValue(string $pinValue)
    {
        return Pines::where('pin', $pinValue)->value('id_pin');
    }

    public function create(array $attributes): Pines
    {
        $pin = new Pines();
        $pin->fill($attributes);
        $pin->save();

        return $pin;
    }

    public function findByIdPin($idPin): ?Pines
    {
        return Pines::where('id_pin', $idPin)->first();
    }

    public function allWithUsers(array $filters = []): Collection
    {
        $filters = array_merge([
            'search' => '',
            'estado' => 'todos',
            'asignacion' => 'todos',
            'fecha_desde' => null,
            'fecha_hasta' => null,
            'sort' => 'creacion_fecha',
            'direction' => 'desc',
        ], $filters);

        $query = Pines::query()->with('usuario');

        if (!empty($filters['search'])) {
            $search = $filters['search'];
            $query->where(function ($subQuery) use ($search) {
                $subQuery
                    ->where('pin', 'like', "%{$search}%")
                    ->orWhereHas('usuario', function ($userQuery) use ($search) {
                        $userQuery->where('email', 'like', "%{$search}%");
                    });
            });
        }

        if ($filters['estado'] !== 'todos') {
            $query->where('estado', $filters['estado'] === 'activo');
        }

        if ($filters['asignacion'] === 'asignados') {
            $query->whereHas('usuario');
        }

        if ($filters['asignacion'] === 'libres') {
            $query->doesntHave('usuario');
        }

        if (!empty($filters['fecha_desde'])) {
            $query->whereDate('creacion_fecha', '>=', $filters['fecha_desde']);
        }

        if (!empty($filters['fecha_hasta'])) {
            $query->whereDate('creacion_fecha', '<=', $filters['fecha_hasta']);
        }

        $direction = $filters['direction'] === 'asc' ? 'asc' : 'desc';

        if ($filters['sort'] === 'usuario') {
            $query
                ->leftJoin('users', 'pines.id_pin', '=', 'users.id_pin')
                ->select('pines.*')
                ->orderByRaw('users.email IS NULL')
                ->orderBy('users.email', $direction);
        } else {
            $query->orderBy($filters['sort'], $direction);
        }

        return $query->get();
    }
}


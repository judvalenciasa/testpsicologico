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

    public function allWithUsers(): Collection
    {
        return Pines::with('usuario')->get();
    }
}


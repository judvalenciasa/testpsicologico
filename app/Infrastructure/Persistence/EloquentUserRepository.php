<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Users\Contracts\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Collection;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function nonAdminUsers(): Collection
    {
        return User::where('es_administrador', 0)->get();
    }

    public function findByEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }

    public function findByEmailWithPin(string $email): ?User
    {
        return User::where('email', $email)->with('pin')->first();
    }

    public function save(User $user): bool
    {
        return $user->save();
    }
}


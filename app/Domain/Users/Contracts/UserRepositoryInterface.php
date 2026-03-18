<?php

namespace App\Domain\Users\Contracts;

use App\Models\User;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function nonAdminUsers(): Collection;

    public function findByEmail(string $email): ?User;

    public function findByEmailWithPin(string $email): ?User;

    public function save(User $user): bool;
}


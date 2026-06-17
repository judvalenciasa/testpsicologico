<?php

namespace App\Domain\Pines\Contracts;

use App\Models\Pines;
use Illuminate\Support\Collection;

interface PinRepositoryInterface
{
    public function existsByPin(string $pin): bool;

    public function findIdByPinValue(string $pinValue);

    public function create(array $attributes): Pines;

    public function findByIdPin($idPin): ?Pines;

    public function allWithUsers(array $filters = []): Collection;
}


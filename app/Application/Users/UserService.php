<?php

namespace App\Application\Users;

use App\Domain\Users\Contracts\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {
    }

    public function nonAdminUsers(): Collection
    {
        return $this->userRepository->nonAdminUsers();
    }

    public function existingByEmail(string $email): ?User
    {
        return $this->userRepository->findByEmail($email);
    }

    public function userWithPinByEmail(string $email): ?User
    {
        return $this->userRepository->findByEmailWithPin($email);
    }

    public function newRegisteredUser(array $data): User
    {
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->id_pin = $data['id_pin'];
        $user->password = Hash::make($data['password']);
        $user->es_administrador = 0;

        return $user;
    }

    public function save(User $user): bool
    {
        return $this->userRepository->save($user);
    }
}


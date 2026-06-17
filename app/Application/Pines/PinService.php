<?php

namespace App\Application\Pines;

use App\Domain\Pines\Contracts\PinRepositoryInterface;
use App\Models\Pines;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class PinService
{
    private const INITIAL_ATTEMPTS = 0;
    private const TEST_ID = 1;
    private const PIN_CODE_LENGTH = 5;
    private const PIN_CHARSET = '0123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ';

    public function __construct(private readonly PinRepositoryInterface $pinRepository)
    {
    }

    public function storePin(string $pin): bool
    {
        $creationDate = Carbon::now();

        $this->pinRepository->create([
            'pin' => $pin,
            'id_prueba' => self::TEST_ID,
            'creacion_fecha' => $creationDate,
            'fecha_expiracion' => $creationDate,
            'intentos' => self::INITIAL_ATTEMPTS,
        ]);

        return true;
    }

    public function anyPinExists(array $pins): bool
    {
        foreach ($pins as $pin) {
            if ($this->pinRepository->existsByPin($pin)) {
                return true;
            }
        }

        return false;
    }

    public function findPinIdByValue(string $pinValue)
    {
        return $this->pinRepository->findIdByPinValue($pinValue);
    }

    public function generatePins($cantidad): array
    {
        $generatedPins = [];

        for ($i = 0; $i < $cantidad; $i++) {
            $generatedPins[] = $this->buildPinCode();
        }

        return $generatedPins;
    }

    public function storePins(array $pins): void
    {
        foreach ($pins as $pin) {
            $this->storePin($pin);
        }
    }

    public function findByIdPin($idPin): ?Pines
    {
        return $this->pinRepository->findByIdPin($idPin);
    }

    public function allWithUsers(array $filters = []): Collection
    {
        return $this->pinRepository->allWithUsers($filters);
    }

    private function buildPinCode(): string
    {
        $codigo = '';
        for ($j = 0; $j < self::PIN_CODE_LENGTH; $j++) {
            $codigo .= self::PIN_CHARSET[rand(0, strlen(self::PIN_CHARSET) - 1)];
        }

        return $codigo;
    }
}


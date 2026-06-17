<?php

namespace App\Providers;

use App\Domain\Pines\Contracts\PinRepositoryInterface;
use App\Domain\Users\Contracts\UserRepositoryInterface;
use App\Infrastructure\Persistence\EloquentPinRepository;
use App\Infrastructure\Persistence\EloquentUserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PinRepositoryInterface::class, EloquentPinRepository::class);
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

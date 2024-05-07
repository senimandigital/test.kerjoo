<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CutiRepositoryInterface;
use App\Repositories\EloquentCutiRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            CutiRepositoryInterface::class,
            EloquentCutiRepository::class
        );
    }
}

<?php

namespace App\Providers;

use App\Interfaces\SportRepositoryInterface;
use App\Interfaces\StudentsRepositoryInterface;
use App\Repositories\SportRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SportRepositoryInterface::class, SportRepository::class);
        $this->app->bind(StudentsRepositoryInterface::class, StudentRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

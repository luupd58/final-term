<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Test\TestRepositoryInterface::class,
            \App\Repositories\Test\TestEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\InfoClass\InfoClassRepositoryInterface::class,
            \App\Repositories\InfoClass\InfoClassEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Student\StudentRepositoryInterface::class,
            \App\Repositories\Student\StudentEloquentRepository::class
        );
    }
}

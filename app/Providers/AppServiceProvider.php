<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Contract\RepositoryInterface::class,
            \App\Repositories\Eloquent\EloquentRepository::class
        );
        $this->app->singleton(
            \App\Service\StudentServiceInterface::class,
            \App\Service\impl\StudentService::class
        );
        $this->app->singleton(
            \App\Repositories\Contract\StudentRepositoryInterface::class,
                    \App\Repositories\Eloquent\StudentEloquentRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

}

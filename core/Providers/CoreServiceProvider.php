<?php

namespace Core\Providers;

use Core\Services\BookService;
use Core\Repositories\BookRepository;
use Core\Services\ServiceContract;
use Illuminate\Support\ServiceProvider;
use Core\Repositories\RepositoryContract;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RepositoryContract::class, BookRepository::class);
        $this->app->bind(ServiceContract::class, BookService::class);
    }
}

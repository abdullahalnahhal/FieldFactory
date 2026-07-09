<?php

namespace FormFactory\Fieldfactory\Providers;

use Illuminate\Support\ServiceProvider;

class FieldFactoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishesMigrations([
            __DIR__ . '/../database/migrations/' => database_path('migrations'),
        ]);

        // Load migrations, routes, and views
//        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
//        $this->loadMigrationsFrom(__DIR__.'/../Migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'field-factory');
    }
}

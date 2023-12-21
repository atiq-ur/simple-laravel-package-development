<?php

namespace Atiq\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('Atiq\Calculator\Controllers\CalculatorController');

        // register facade
        $this->app->bind('calculator', function ($app) {
            return new \Atiq\Calculator\Facades\Calculator();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}

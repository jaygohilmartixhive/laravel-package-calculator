<?php

namespace Devjay\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Rgister Controller here
        $this->app->make('Devdojo\Calculator\CalculatorController');
        //Rgister View folder to acces blade file's here
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
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
        $data = array();
        $data['a'] = 10;
        $data['b'] = 30;
        $data['c'] = 50;
        view()->share('number', $data);
    }
}

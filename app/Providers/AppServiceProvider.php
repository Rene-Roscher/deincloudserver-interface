<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach (['version' => config('app.version')] as $key => $value) {
            $this->registerBladeDirective($key, $value);
        }
    }

    public function registerBladeDirective($key, $value)
    {
        Blade::directive($key, function () use ($value) {
            return $value;
        });
    }

}

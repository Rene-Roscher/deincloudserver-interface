<?php

namespace App\Providers;

use App\Helper\Helper;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        $params = [
            'version' => config('app.version'),
            'routepath' => str_replace('/', ' / ', str_replace_first('/', '', str_replace(url('/'), '', request()->fullUrl()))),
        ];
        foreach ($params as $key => $value) {
            $this->registerBladeDirective($key, $value);
        }
        Blade::directive('user', function ($key) {
            return auth()->user()->{$key};
        });
        Blade::directive('helper', function ($key) {
            return call_user_func(Helper::class.'::'.$key);
        });
    }

    public function registerBladeDirective($key, $value)
    {
        Blade::directive($key, function () use ($value) {
            return $value;
        });
    }

}

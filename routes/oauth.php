<?php

use Illuminate\Support\Facades\Route;
//use Laravel\Socialite\Facades\Socialite;

use Laravel\Socialite\Facades\Socialite;

Route::prefix('{provider}')->where(['provider' => 'google|twitter|github|facebook'])->group(function () {
    Route::get('/', function ($provider) {
        return Socialite::with($provider)->redirect();
    });
    Route::get('callback', 'oAuthController@callback')->name('oauth.callback');
});

Route::put('registration', 'oAuthController@authorizeData')->name('oauth.registration.setdata');

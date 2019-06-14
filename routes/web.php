<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('web.homepage');
});

Route::get('/tos', function () {
    return view('web.agb');
});

Route::get('/imprint', function () {
    return view('web.imprint');
});

Route::get('/data-center', function () {
    return view('web.data_center');
});

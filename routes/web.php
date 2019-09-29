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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

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

Route::get('/datacenter', function () {
    return view('web.data_center');
});

Route::get('/contact-us', function () {
    return view('web.contact_us');
});

Route::post('/contact-us', function (Request $request) {

    Mail::send('web.contact_us_data', ['request' => $request], function ($m) use ($request) {
        $name = $request->get('name');
        $m->from('no-reply@deincloudserver.de', $name .' - Kontaktformular');
        $m->to('roscher794@gmail.com', $name)->subject('Kontaktformular');
    });
    return dd($request->all());
})->name('contact_us.send');


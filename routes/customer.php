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
use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('customer.dashboard');

Route::prefix('activities')->namespace('Activity')->group(function () {
    Route::get('/', 'ActivityController@index')->name('customer.activity.index');
    Route::get('{activityLog}/detailsModal', 'ActivityController@details')->name('customer.activity.details');
});

Route::prefix('sessions')->namespace('Session')->group(function () {
    Route::get('/', 'SessionController@index')->name('customer.session.index');
    Route::get('{session}/detailsModal', 'ActivityController@details')->name('customer.session.details');
    Route::get('{session}/destroy', 'SessionController@destory')->name('customer.session.destory');
});

Route::prefix('notifications')->namespace('Notification')->group(function () {
    Route::get('/', 'NotificationController@index')->name('customer.notification.index');
});

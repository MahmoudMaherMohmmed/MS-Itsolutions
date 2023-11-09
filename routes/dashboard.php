<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/home', [App\Http\Controllers\Dashboard\HomeController::class, 'home'])->name('home');
    Route::resource('users', App\Http\Controllers\Dashboard\UserController::class);

    Route::resource('sliders', App\Http\Controllers\Dashboard\SliderController::class);
    Route::resource('settings', App\Http\Controllers\Dashboard\SettingController::class)->only(['index', 'show', 'edit', 'update']);
});
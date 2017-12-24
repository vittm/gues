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

Route::get('{locale}/get-started', function ($locale) {
    App::setLocale($locale);
    return view('get-started');
});

Route::get('{locale}/welcome', 'HomeController@index');
Route::get('/get-started/get-info', 'GetStartedController@get_info');
Route::get('{locale}/admin/listings', 'GetStartedController@listing');
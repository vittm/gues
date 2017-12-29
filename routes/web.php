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



Route::get('/', 'HomeController@index');
Route::get('/admin/listings', 'GetStartedController@listing');
Auth::routes();
Route::group(['prefix' => '{locale}'], function () {
    Route::group(['middleware' => 'locale'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('/get-started', function () {
            return view('get-started');
        });
        Route::get('/get-started/get-info', 'GetStartedController@get_info');
        Route::post('/calculator-{block}-{decoration}-{bedrooms}-{email}', 'HomeController@calculator');
        Route::get('/get-info', 'HomeController@get_info');
        Route::get('/thanks', function () {
            return view('thanks');
        });
    });
});
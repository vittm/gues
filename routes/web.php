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
Route::get('/admin/listings-call-me', 'GetStartedController@listing_call_me');
Route::get('/admin/listings-search', 'GetStartedController@listing_search');
Auth::routes();
Route::group(['prefix' => '{locale}'], function () {
    Route::group(['middleware' => 'locale'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('/get-started', function () {
            return view('get-started');
        });
        Route::get('/how-it-work', function () {
            return view('how-it-work');
        });
        Route::get('/our-home', function () {
            return view('our-home');
        });
        Route::get('/about-us', function () {
            return view('about-us');
        });
        Route::get('/services', function () {
            return view('service');
        });
        Route::get('/pricing', function () {
            return view('price');
        });
        Route::get('/get-started/get-info', 'GetStartedController@get_info');
        Route::post('/calculator-{block}-{decoration}-{bedrooms}-{email}', 'HomeController@calculator');
        Route::get('/get-info', 'HomeController@get_info');
        Route::get('/thanks', function () {
            return view('thanks');
        });
    });
});
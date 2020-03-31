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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::post('/donate', [
    'uses' => 'DonationController@donate',
    'as' => 'donate',
]);

Route::get('/success', [
    'uses' => 'DonationController@success',
    'as' => 'success',
]);

Route::get('/consumer', [
    'uses' => 'DonationController@keys',
    'as' => 'keys',
]);

Route::post('/consumer', [
    'uses' => 'DonationController@consumer',
    'as' => 'consumer',
]);

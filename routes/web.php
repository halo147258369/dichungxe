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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/login','LoginController@getLogin')->name('guest.login.get');
Route::post('/login','LoginController@postLogin')->name('guest.login.post');

Route::get('/register','RegisterController@getRegister')->name('guest.register.get');
Route::post('/register','RegisterController@postRegister')->name('guest.register.post');

Route::group(['prefix' => 'client'], function() {
	Route::get('/', 'Client\DashboardController@getDashboard')->name('client.dashboard.get');
});
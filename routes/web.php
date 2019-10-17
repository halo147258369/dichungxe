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
Route::group(['prefix' => 'trip'], function() {
    Route::get('/','Client\TripController@getList')->name('trip.list.get');
    Route::get('/','Client\TripController@getAdd')->name('trip.add.get');
    Route::post('/trip/add','Client\TripController@postAdd')->name('trip.add.post');
  });
Route::group(['prefix' => 'company'], function() {
    Route::get('/','Client\CompanyController@getList')->name('company.list.get');
    Route::get('/companies/add','Client\CompanyController@getAdd')->name('company.add.get');
    Route::post('/companies/add','Client\CompanyController@postAdd')->name('company.add.post');
    Route::get('edit/{id}','Client\CompanyController@getEdit')->name('company.edit.get');
    Route::post('edit/{id}','Client\CompanyController@postEdit')->name('company.edit.post');

		Route::get('delete/{id}','Client\CompanyController@getDelete');
  });
Route::group(['prefix' => 'city'], function() {
    Route::get('/','Client\CityController@getList')->name('city.list.get');
    Route::get('/city/add','ClientCityController@getAdd')->name('city.add.get');
    Route::post('/city/add','Client\CityController@postAdd')->name('city.add.post');
    Route::get('edit/{id}','Client\CityController@getEdit')->name('city.edit.get');
    Route::post('edit/{id}','Client\CityController@postEdit')->name('city.edit.post');
	Route::get('delete/{id}','Client\CityController@getDelete');
  });

Route::group(['prefix' => 'district'], function() {
    Route::get('/','Client\DistrictController@getList')->name('district.list.get');
    Route::get('/district/add','Client\DistrictController@getAdd')->name('district.add.get');
    Route::post('/district/add','Client\DistrictController@postAdd')->name('district.add.post');
    Route::get('edit/{id}','Client\DistrictController@getEdit')->name('district.edit.get');
    Route::post('edit/{id}','Client\DistrictController@postEdit')->name('district.edit.post');
	Route::get('delete/{id}','Client\DistrictController@getDelete');
  });
Route::group(['prefix' => 'ward'], function() {
    Route::get('/','Client\WardController@getList')->name('ward.list.get');
    Route::get('/ward/add','Client\WardController@getAdd')->name('ward.add.get');
    Route::post('/ward/add','Client\WardController@postAdd')->name('ward.add.post');
    Route::get('edit/{id}','Client\WardController@getEdit')->name('ward.edit.get');
    Route::post('edit/{id}','Client\WardController@postEdit')->name('ward.edit.post');
	Route::get('delete/{id}','Client\WardController@getDelete');
  });
Route::group(['prefix' => 'place'], function() {
    Route::get('/','Client\PlaceController@getList')->name('place.list.get');
    Route::get('/place/add','Client\PlaceController@getAdd')->name('place.add.get');
    Route::post('/place/add','Client\PlaceController@postAdd')->name('place.add.post');
    Route::get('edit/{id}','Client\PlaceController@getEdit')->name('place.edit.get');
    Route::post('edit/{id}','Client\PlaceController@postEdit')->name('place.edit.post');
	Route::get('delete/{id}','Client\PlaceController@getDelete');
  });








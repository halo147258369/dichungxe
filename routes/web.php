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

Route::get('/', 'Guest\IndexController@getIndex');
Route::post('search','SearchController@postSearch');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login','LoginController@getLogin')->name('guest.login.get');
Route::post('/login','LoginController@postLogin')->name('guest.login.post');
Route::get('/register','RegisterController@getRegister')->name('guest.register.get');
Route::post('/register','RegisterController@postRegister')->name('guest.register.post');
Route::get('/logout', 'LoginController@getLogout')->middleware('auth:member')->name('member.logout.get');

Route::prefix('/api')->namespace('API')->name('api.')->group(function() {
  Route::get('/getdistricts/{id}', 'AddressController@getDistricts')->name('district.get');
  Route::get('/getwards/{id}', 'AddressController@getWards')->name('ward.get');
});

Route::prefix('/member')->middleware('auth:member')->namespace('Member')->name('member.')->group(function() {
	Route::get('/', 'DashboardController@getView')->name('dashboard.view.get');

  Route::prefix('/vehicles')->name('vehicle.')->group(function() {
    Route::get('/','VehiclesController@getList')->name('list.get');
    Route::get('/add','VehiclesController@getAdd')->name('add.get');
    Route::post('/add','VehiclesController@postAdd')->name('add.post');
    Route::get('/edit/{id}','VehiclesController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','VehiclesController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','VehiclesController@getDelete')->name('delete.get');
  });
  
  Route::prefix('/trips')->name('trip.')->group(function() {
    Route::get('/','TripsController@getList')->name('list.get');
    Route::get('/add','TripsController@getAdd')->name('add.get');
    Route::post('/add','TripsController@postAdd')->name('add.post');
    Route::get('/edit/{id}','TripsController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','TripsController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','TripsController@getDelete')->name('delete.get');
  });

});

Route::group(['prefix' => 'companies'], function() {
  Route::get('/','Member\CompanyController@getList')->name('company.list.get');
  Route::get('add','Member\CompanyController@getAdd')->name('company.add.get');
  Route::post('add','Member\CompanyController@postAdd')->name('company.add.post');
  Route::get('edit/{id}','Member\CompanyController@getEdit')->name('company.edit.get');
  Route::post('edit/{id}','Member\CompanyController@postEdit')->name('company.edit.post');
	Route::get('delete/{id}','Member\CompanyController@getDelete')->name('delete.get');
});

Route::group(['prefix' => 'cities'], function() {
  Route::get('/','Member\CityController@getList')->name('city.list.get');
  Route::get('add','Member\CityController@getAdd')->name('city.add.get');
  Route::post('add','Member\CityController@postAdd')->name('city.add.post');
  Route::get('edit/{id}','Member\CityController@getEdit')->name('city.edit.get');
  Route::post('edit/{id}','Member\CityController@postEdit')->name('city.edit.post');
	Route::get('delete/{id}','Member\CityController@getDelete');
});

Route::group(['prefix' => 'districts'], function() {
  Route::get('/','Member\DistrictController@getList')->name('district.list.get');
  Route::get('add','Member\DistrictController@getAdd')->name('district.add.get');
  Route::post('add','Member\DistrictController@postAdd')->name('district.add.post');
  Route::get('edit/{id}','Member\DistrictController@getEdit')->name('district.edit.get');
  Route::post('edit/{id}','Member\DistrictController@postEdit')->name('district.edit.post');
	Route::get('delete/{id}','Member\DistrictController@getDelete');
});

Route::group(['prefix' => 'wards'], function() {
  Route::get('/','Member\WardController@getList')->name('ward.list.get');
  Route::get('add','Member\WardController@getAdd')->name('ward.add.get');
  Route::post('add','Member\WardController@postAdd')->name('ward.add.post');
  Route::get('edit/{id}','Member\WardController@getEdit')->name('ward.edit.get');
  Route::post('edit/{id}','Member\WardController@postEdit')->name('ward.edit.post');
	Route::get('delete/{id}','Member\WardController@getDelete');
});

Route::group(['prefix' => 'places'], function() {
  Route::get('/','Member\PlaceController@getList')->name('place.list.get');
  Route::get('add','Member\PlaceController@getAdd')->name('place.add.get');
  Route::post('add','Member\PlaceController@postAdd')->name('place.add.post');
  Route::get('edit/{id}','Member\PlaceController@getEdit')->name('place.edit.get');
  Route::post('edit/{id}','Member\PlaceController@postEdit')->name('place.edit.post');
	Route::get('delete/{id}','Member\PlaceController@getDelete');
});

Route::group(['prefix' => 'bookings'], function() {
  Route::get('/','Member\BookingController@getList')->name('booking.list.get');
  Route::get('add','Member\BookingController@getAdd')->name('booking.add.get');
  Route::post('add','Member\Bookingontroller@postAdd')->name('booking.add.post');
  Route::get('edit/{id}','Member\BookingController@getEdit')->name('booking.edit.get');
  Route::post('edit/{id}','Member\BookingController@postEdit')->name('booking.edit.post');
  Route::get('delete/{id}','Member\BookingController@getDelete');
});




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
    return 'Welcome';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login','LoginController@getLogin')->name('guest.login.get');
Route::post('/login','LoginController@postLogin')->name('guest.login.post');
Route::get('/register','RegisterController@getRegister')->name('guest.register.get');
Route::post('/register','RegisterController@postRegister')->name('guest.register.post');
Route::get('/logout', 'LoginController@getLogout')->middleware('auth:member')->name('member.logout.get');

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
});

Route::group(['prefix' => 'trips'], function() {
  Route::get('/','Client\TripController@getList')->name('trip.list.get');
  Route::get('add','Client\TripController@getAdd')->name('trip.add.get');
  Route::post('add','Client\TripController@postAdd')->name('trip.add.post');
});

Route::group(['prefix' => 'companies'], function() {
  Route::get('/','Client\CompanyController@getList')->name('company.list.get');
  Route::get('add','Client\CompanyController@getAdd')->name('company.add.get');
  Route::post('add','Client\CompanyController@postAdd')->name('company.add.post');
  Route::get('edit/{id}','Client\CompanyController@getEdit')->name('company.edit.get');
  Route::post('edit/{id}','Client\CompanyController@postEdit')->name('company.edit.post');
	Route::get('delete/{id}','Client\CompanyController@getDelete');
});

Route::group(['prefix' => 'cities'], function() {
  Route::get('/','Client\CityController@getList')->name('city.list.get');
  Route::get('add','Client\CityController@getAdd')->name('city.add.get');
  Route::post('add','Client\CityController@postAdd')->name('city.add.post');
  Route::get('edit/{id}','Client\CityController@getEdit')->name('city.edit.get');
  Route::post('edit/{id}','Client\CityController@postEdit')->name('city.edit.post');
	Route::get('delete/{id}','Client\CityController@getDelete');
});

Route::group(['prefix' => 'districts'], function() {
  Route::get('/','Client\DistrictController@getList')->name('district.list.get');
  Route::get('add','Client\DistrictController@getAdd')->name('district.add.get');
  Route::post('add','Client\DistrictController@postAdd')->name('district.add.post');
  Route::get('edit/{id}','Client\DistrictController@getEdit')->name('district.edit.get');
  Route::post('edit/{id}','Client\DistrictController@postEdit')->name('district.edit.post');
	Route::get('delete/{id}','Client\DistrictController@getDelete');
});

Route::group(['prefix' => 'wards'], function() {
  Route::get('/','Client\WardController@getList')->name('ward.list.get');
  Route::get('add','Client\WardController@getAdd')->name('ward.add.get');
  Route::post('add','Client\WardController@postAdd')->name('ward.add.post');
  Route::get('edit/{id}','Client\WardController@getEdit')->name('ward.edit.get');
  Route::post('edit/{id}','Client\WardController@postEdit')->name('ward.edit.post');
	Route::get('delete/{id}','Client\WardController@getDelete');
});

Route::group(['prefix' => 'places'], function() {
  Route::get('/','Client\PlaceController@getList')->name('place.list.get');
  Route::get('add','Client\PlaceController@getAdd')->name('place.add.get');
  Route::post('add','Client\PlaceController@postAdd')->name('place.add.post');
  Route::get('edit/{id}','Client\PlaceController@getEdit')->name('place.edit.get');
  Route::post('edit/{id}','Client\PlaceController@postEdit')->name('place.edit.post');
	Route::get('delete/{id}','Client\PlaceController@getDelete');
});

Route::group(['prefix' => 'bookings'], function() {
  Route::get('/','Client\BookingController@getList')->name('booking.list.get');
  Route::get('add','Client\BookingController@getAdd')->name('booking.add.get');
  Route::post('add','Client\Bookingontroller@postAdd')->name('booking.add.post');
  Route::get('edit/{id}','Client\BookingController@getEdit')->name('booking.edit.get');
  Route::post('edit/{id}','Client\BookingController@postEdit')->name('booking.edit.post');
  Route::get('delete/{id}','Client\BookingController@getDelete');
});




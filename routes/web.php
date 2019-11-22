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
Route::get('test','TestController@test');
Route::get('test1','TestController@test1');
Route::get('test2','TestController@test2');
Route::get('news','TestController@news');
Route::get('news_type/{id}','TestController@news_type');
Route::get('/', 'Guest\IndexController@getIndex')->name('guest.index.view.get');
Route::post('search','Guest\SearchController@postSearch')->name('guest.index.search.post');
Route::get('detail/{id}', 'Guest\TripsController@getView')->name('guest.trip.view.get');
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
    Route::get('/{id}','TripsController@getView')->name('view.get');

  });

 
  Route::prefix('/places')->name('place.')->group(function() {
    Route::get('/','PlacesController@getList')->name('list.get');
    Route::get('/add','PlacesController@getAdd')->name('add.get');
    Route::post('/add','PlacesController@postAdd')->name('add.post');
    Route::get('/edit/{id}','PlacesController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','PlacesController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','PlacesController@getDelete')->name('delete.get');
  });

  Route::prefix('/bookings')->name('booking.')->group(function() {
    Route::get('/','BookingController@getList')->name('list.get');
    Route::get('/add','BookingController@getAdd')->name('add.get');
    Route::post('/add','BookingController@postAdd')->name('add.post');
    Route::get('/edit/{id}','BookingController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','BookingController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','BookingController@getDelete')->name('delete.get');
    Route::get('/verify/{id}','BookingController@getVerify')->name('verify.get');
    Route::get('/rate/{id}','RateController@getRateBooking')->name('rate.get');
    Route::post('/rate/{id}','RateController@postRateBooking')->name('rate.post');
  });

});

Route::prefix('/admin')->middleware('auth:member')->namespace('Admin')->name('admin.')->group(function() {
  Route::prefix('/cities')->name('city.')->group(function() {
    Route::get('/','CitiesController@getList')->name('list.get');
    Route::get('/add','CitiesController@getAdd')->name('add.get');
    Route::post('/add','CitiesController@postAdd')->name('add.post');
    Route::get('/edit/{id}','CitiesController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','CitiesController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','CitiesController@getDelete')->name('delete.get');
  });
  Route::prefix('/districts')->name('district.')->group(function() {
    Route::get('/','DistrictsController@getList')->name('list.get');
    Route::get('/add','DistrictsController@getAdd')->name('add.get');
    Route::post('/add','DistrictsController@postAdd')->name('add.post');
    Route::get('/edit/{id}','DistrictsController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','DistrictsController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','DistrictsController@getDelete')->name('delete.get');
  });
  Route::prefix('/wards')->name('ward.')->group(function() {
    Route::get('/','WardsController@getList')->name('list.get');
    Route::get('/add','WardsController@getAdd')->name('add.get');
    Route::post('/add','WardsController@postAdd')->name('add.post');
    Route::get('/edit/{id}','WardsController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','WardsController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','WardsController@getDelete')->name('delete.get');
  });
  Route::prefix('/busroutes')->name('busroute.')->group(function() {
    Route::get('/','BusroutesController@getList')->name('list.get');
    Route::get('/add','BusroutesController@getAdd')->name('add.get');
    Route::post('/add','BusroutesController@postAdd')->name('add.post');
    Route::get('/edit/{id}','BusroutesController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','BusroutesController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','BusroutesController@getDelete')->name('delete.get');
  }); 

  Route::prefix('/hours')->name('hour.')->group(function() {
    Route::get('/','HoursController@getList')->name('list.get');
    Route::get('/add','HoursController@getAdd')->name('add.get');
    Route::post('/add','HoursController@postAdd')->name('add.post');
    Route::get('/edit/{id}','HoursController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','HoursController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','HoursController@getDelete')->name('delete.get');
  });
  
  Route::prefix('/listMembers')->name('listMember.')->group(function() {
    Route::get('/','ListMemberController@getList')->name('list.get');
    Route::get('/edit/{id}','ListMemberController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','ListMemberController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','ListMemberController@getDelete')->name('delete.get');
});

   Route::prefix('/companies')->name('company.')->group(function() {
    Route::get('/','CompaniesController@getList')->name('list.get');
    Route::get('/add','CompaniesController@getAdd')->name('add.get');
    Route::post('/add','CompaniesController@postAdd')->name('add.post');
    Route::get('/edit/{id}','CompaniesController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','CompaniesController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','CompaniesController@getDelete')->name('delete.get');
  });
  Route::prefix('/news')->name('news.')->group(function() {
    Route::get('/','NewsController@getList')->name('list.get');
    Route::get('/add','NewsController@getAdd')->name('add.get');
    Route::post('/add','NewsController@postAdd')->name('add.post');
    Route::get('/edit/{id}','NewsController@getEdit')->name('edit.get');
    Route::post('/edit/{id}','NewsController@postEdit')->name('edit.post');
    Route::get('/delete/{id}','NewsController@getDelete')->name('delete.get');
});
  
});








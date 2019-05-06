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

// Route::resource('customers,'CustomersController');

Route::get('/', "PagesController@home");
// Route::get('/customers', "CustomersController@index");
// Route::post('/customers', "CustomersController@store");
// Route::get('/customers/create', "CustomersController@create");
// Route::get('/customers/{customers}/edit','CustomersController@edit');
// Route::patch('customers/{customers}/edit','CustomersController@update');
// Route::delete('customers/{customers}/edit','CustomersController@destroy');

Route::resource('customers', "CustomersController");

// Route::get('/reservations', "ReservationsController@index");
// Route::post('/reservations', "ReservationsController@store");
// Route::get('/reservations/{customers}/create', "ReservationsController@create");
// Route::get('/reservations/{reservations}/edit','ReservationsController@edit');
// Route::patch('reservations/{reservations}/edit','ReservationsController@update');

// Route::resource('reservations', 'ReservationsController');
Route::get('/reservations', "ReservationsController@index");

Route::get('/reservations/create/{customer_id}', "ReservationsController@create_reservation");
Route::post('/reservations/{{ $customer->id }}', "ReservationsController@store");
// Route::get('/reservations', 'ReservationsController@create_reservation');
// Route::post('/reservations', 'ReservationsController@store');
// Route::get('/reservations/create/{customer_id}', function($customer_id)
// {
//   // dd("try this");
//   dd($customer_id);
//   // dd(request);
//   // dd({customer_id});
//   // return view ('reservations.create');
//
// });

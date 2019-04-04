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
Route::get('/customers', "CustomersController@index");
Route::post('/customers', "CustomersController@store");
Route::get('/customers/create', "CustomersController@create");
Route::get('/customers/{customers}/edit','CustomersController@edit');
Route::patch('customers/{customers}/edit','CustomersController@update');
Route::delete('customers/{customers}/edit','CustomersController@destroy');

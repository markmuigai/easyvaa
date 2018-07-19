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
    return view('home');
});

Route::get('/logout', 'UsersController@logout');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/venues/{venue}/categories', 'CategoriesController@store');
Route::resource('venues', 'VenuesController');

Route::get('/filters', 'VenuesController@showfilters');

Route::post('/filters', 'VenuesController@filters');

Route::get('/details', 'VenuesController@createDetails');

Route::post('/details', 'VenuesController@storeDetails');

Route::post('/venues/{venue}/events', 'EventsController@store');

Route::get('/myevents', 'EventsController@myevents');

Route::get('/myevents/{event}', 'EventsController@myevent');

Route::get('/myvenue/{venue}', 'VenuesController@myvenue');

Route::get('/myvenue/{venue}/{event}', 'EventsController@show');

Route::get('/myevents/{venue}/edit', 'EventsController@edit');

Route::put('/myevents/{venue}/events', 'EventsController@update');

Route::get('/myvenues', 'VenuesController@myvenues');

Route::get('/myvenues/{venue}/edit', 'VenuesController@edit');

Route::put('/myvenues/{venue}/edit', 'VenuesController@update');

Route::delete('/myvenues/destroy/{venue}', 'VenuesController@delete');


Route::get('/categories', 'CategoriesController@create');

Route::post('/categories', 'CategoriesController@store');

Route::get('/admin', 'AdminController@dashboard');

Route::get('/admin/allvenues', 'AdminController@allvenues');

Route::get('/admin/allevents', 'AdminController@allevents');

Route::get('/admin/allusers', 'AdminController@allusers');


Route::post('/myvenue/{venue}/{event}', 'QuotesController@store');

Route::post('/quotes/{quote}', 'PaymentsController@store');

Route::get('/mypayments', 'PaymentsController@mypayments');

// Route::get('mypayments/{payment}', 'PaymentsController@mypayment');
Route::get('myevents/{event}/{quote}', 'PaymentsController@mypayment');

Route::get('/sms/send/{to}', 'EventsController@notify');




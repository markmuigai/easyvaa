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
    return view('mainpage');
});

Route::get('/signin', function () {
    return view('user.signin');
});

Route::get('/signup', function () {
    return view('user.signup');
});

Route::get('/venues', 'VenuesController@index');

// Route::get('/venues/create', function () {
//     return view('venue.create');
// });
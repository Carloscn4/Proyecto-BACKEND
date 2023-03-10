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
Route::resource('hotel','HotelController');
Route::get('hotel/{longitude}/{latitude}','HotelController@indexNearBy');
Route::resource('hotel.room','RoomController');
//Route::resource('booking','BookingController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

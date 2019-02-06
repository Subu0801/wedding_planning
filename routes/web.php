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

Route::get('/our_services', function () {
    return view('our_services');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/onlinecalendar', function () {
    return view('onlinecalendar');
});

Route::get('/onlinehelpchatting&wedidea', function () {
    return view('onlinehelpchatting&wedidea');
});

Route::get('/vendor_services.hotel_services', function () {
    return view('vendor_services.hotel_services');
});

Route::get('/vendor_services.salon', function () {
    return view('vendor_services.salon');
});

Route::get('/vendor_services.videography', function () {
    return view('vendor_services.videography');
});

Route::get('/vendor_services.photography', function () {
    return view('vendor_services.photography');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//create vendor link
Route::resource('/vendor', 'VendorController');

Route::get('/vendor_services.wedding_deco', function () {
    return view('vendor_services.wedding_deco');
});

Route::get('/profile', 'UserController@index');

Route::group(['middleware' => 'can:vendor'], function() {
    Route::get('/clients', 'UserController@allClients');
});





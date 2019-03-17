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

Route::get('/client', function () {
    return view('client');
});

// Route::get('vendor', function () {
//     return view('vendor');
// });

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

Route::get('/photo_gallery', function () {
    return view('photo_gallery');
});

Route::get('/salon', function () {
    return view('vendor_services.salon');
});

Route::get('/hotel_services', function () {
    return view('vendor_services.hotel_services');
});

Route::get('/videography', function () {
    return view('vendor_services.videography');
});


Route::get('/photography', function () {
    return view('vendor_services.photography');
});

Route::get('/wedding_deco', function () {
    return view('vendor_services.wedding_deco');
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



Route::get('/profile', 'ProfileController@index');


Route::get('calendar', 'CalendarController@index')->name('calendars,index');
Route::post('calendar', 'CalendarController@addEvent')->name('calendars,add');


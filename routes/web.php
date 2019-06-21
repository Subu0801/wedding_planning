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

Route::get("/home", function (){
    if ((Gate::allows('vendor', auth()->user()))) {
        return App::call('App\Http\Controllers\VendorController@adminIndex');
    }
    else if ((Gate::allows('user', auth()->user()))){
       return App::call('App\Http\Controllers\HomeController@index');
    }
    else{
        return redirect()->guest('/login');
    }
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/our_services', function () {
    return view('our_services');
});

Route::get('/client', function () {
    return view('client');
});

//  Route::get('/vendor_admin', function () {
//      return view('admin.vendor'); 
// });


Route::get('/onlinecalendar', 'CalendarController@index');
Route::get('/onlinehelpchatting&wedidea', function () {
    return view('onlinehelpchatting&wedidea');
});



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//create vendor link
Route::get('/vendor/{type}', 'VendorController@index');
Route::get('/vendor/{type}/{id}', 'VendorController@singleIndex');
Route::post('/vendor', 'VendorController@postPost')->name('posts.post');


Route::get('/profile', 'ProfileController@index');
Route::get('/updateUser', 'ProfileController@update');


Route::group(['middleware' => 'can:vendor'], function() {
    Route::get('/clients', 'UserController@allClients');
});



// Route::get('/profile', 'ProfileController@index');


Route::get('calendars', 'CalendarController@index');

Route::get('events/{id}', 'EventController@index')->name('events');

Route::group(['middleware' => 'can:vendor'], function(){
    Route::post('/createEvent', 'EventController@store')->name('createEvent');
});
Route::post('/uplodimg', 'ProfileController@updateImg');

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


Route::get('/login', 'LoginController@getlogin')->name('getlogin');
Route::post('/authenticate', 'LoginController@authenticate')->name('authenticate');
Route::get('/register', 'RegisterController@getregister')->name('getregister');
Route::post('/register', 'RegisterController@postregister')->name('postregister');
Route::get('/logout', function(){
	Auth::logout();
});

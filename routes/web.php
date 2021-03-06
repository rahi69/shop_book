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

//Route::get('/', function () {
//    return view('layouts/app');
//});

Route::get('register','Auth\RegisterController@showRegistrationForm');
Auth::routes();

Route::get('/', 'MainController@index');

Route::get('detail/{id}', 'MainController@detail');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('review/{id}','MainController@review');

Route::get('logout','Auth\LoginController@logout');


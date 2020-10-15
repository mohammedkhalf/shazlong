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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomePageController@index');
Route::get('/doctor/{id}/show', 'HomePageController@show')->name('doctor.show');
//ajax search 
Route::get('/search','HomePageController@search');

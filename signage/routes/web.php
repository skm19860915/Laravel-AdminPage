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

Route::get('/', 'AuthController@index');
Route::post('auth/login', 'AuthController@login');
Route::get('dashboard', 'DashboardController@index');
Route::get('auth/logout', 'AuthController@logout');
Route::get('admin', 'AdminController@index');
Route::get('customer', 'CustomerController@index');
Route::post('customer', 'CustomerController@save');
Route::post('api/register', 'ApiController@register');
Route::post('api/login', 'ApiController@login');

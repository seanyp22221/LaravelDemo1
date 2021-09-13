<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', function () {
    return view('home');
});
//Rather  than use the following as allowed in 7.2 and below
//Route::get('/user','UserController@index');
//Use the following in 8 and above
Route::get('/user','App\Http\Controllers\UserController@index');

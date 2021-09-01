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
Route::get('list','App\Http\Controllers\User@list');
Route::view('home','index');
Route::get('delete/{id}','App\Http\Controllers\User@delete');
Route::match('[get,post]','update/{id}','App\Http\Controllers\User@update');

Route::view('signup','signup');
Route::view('login','login');
Route::post('s_post','App\Http\Controllers\User@signup');
Route::post('l_post','App\Http\Controllers\User@login');

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

Route::get('/','HomeController@HomeIndex');
Route::get('/visitor','VisitorController@VisitorIndex');
Route::get('/services','ServiceController@ServiceIndex');
Route::get('/getservicesdata','ServiceController@ServicecData');
Route::post('/servicedel','ServiceController@ServicecDelete');
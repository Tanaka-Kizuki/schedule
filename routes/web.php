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

Route::get('/','ScheduleController@index');
Route::post('/add','ScheduleController@create');

Route::get('/show/{id}','ScheduleController@show');
Route::post('/update','ScheduleController@update');
Route::get('/delete/{id}','ScheduleController@delete');

Route::get('/{id}','ScheduleController@show');

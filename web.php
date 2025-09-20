<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\NewController@index');
Route::get('/a','App\Http\Controllers\NewController@Helpline');

Route::get('/c','App\Http\Controllers\NewController@Complain');
Route::get('/p','App\Http\Controllers\NewController@Projects');

Route::get('/r','App\Http\Controllers\NewController@Problems');




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

//home

Route::get('/', 'PageController@home');
Route::get('/contact', 'PageController@contact');
Route::get('/services', 'PageController@services');

//todos app
Route::get('/todos','TodoController@index');
Route::get('/todos/create','TodoController@create');
Route::post('/todos/create','TodoController@store');
Route::delete('/todos/{id}','TodoController@destroy');
Route::get('/todos/{id}/edit','TodoController@edit');
Route::put('/todos/{id}','TodoController@update');




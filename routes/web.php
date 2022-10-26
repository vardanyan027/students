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

Route::prefix('students')->group(function() {
    Route::get('/', 'App\Http\Controllers\StudentsController@index');
    Route::get('/{id}', 'App\Http\Controllers\StudentsController@getById');
    Route::post('/store', 'App\Http\Controllers\StudentsController@store');
    Route::post('/update/{id}', 'App\Http\Controllers\StudentsController@update');
    Route::delete('/delete/{id}', 'App\Http\Controllers\StudentsController@delete');
});


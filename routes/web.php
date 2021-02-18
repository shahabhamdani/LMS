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
    return view('login');
});




Route::get('/home', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});


//Route::get('/dashboard', 'App\Http\Controllers\BookController@index')->name('book');
Route::post('/create', 'App\Http\Controllers\BookController@create')->name('create');
Route::get('/updateform/{id}', 'App\Http\Controllers\BookController@update_form')->name('updateform');
Route::get('/update/{id}', 'App\Http\Controllers\BookController@update')->name('update');
Route::get('/delete/{id}', 'App\Http\Controllers\BookController@delete')->name('delete');

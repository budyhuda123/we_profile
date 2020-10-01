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
    return view('home');
});
Route::get('galeri', function () {
	return view('galeri');
});


Route::get('home', 'HomeController@index');

// route blog
Route::get('/home', 'HomeController@home');
Route::get('/home/tentang', 'HomeController@tentang');
Route::get('/home/kontak', 'HomeController@kontak');
Route::get('/home/login', 'HomeController@login');

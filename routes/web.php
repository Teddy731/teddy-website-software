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

Route::get('/', "SoftwareController@index");

Route::get('/about', "SoftwareController@about");

Route::get('/contact', "SoftwareController@contacts");

Route::post('/contact', "SoftwareController@store");

Route::get('/blog', "SoftwareController@blog");

Route::get('/technology', "SoftwareController@technology");

Route::get('/careers', "SoftwareController@careers");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

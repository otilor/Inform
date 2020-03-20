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

Route::get('/', 'HomeController@index');

Auth::routes();


Route::post('/', 'AdminController@send')->name('send_message');
Route::get('/add', 'AdminController@create');
Route::post('/add', 'AdminController@store')->name('add_student_phone_number');
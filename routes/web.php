<?php

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

Route::get('/', 'PagesController@start');

Route::get('/start', 'PagesController@start');

Route::get('/termine', 'PagesController@termine');

Route::get('/verify', 'PagesController@verifydate');

Route::get('/result', 'PagesController@result');

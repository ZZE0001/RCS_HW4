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

Route::get('/', 'PagesController@home');
Route::get('/all-products', 'PagesController@allProducts');
Route::get('/add-products', 'PagesController@addProducts');
//POST endpoint
Route::post('/all-products', 'PagesController@store');

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

Route::get('/', function () {
    return view('welcome');
});
// comment test

Route::get('/all-products', function () { //example.com/all-products
    return view('all-products');
});

Route::get('/add-products', function () {
    return view('add-products');
});

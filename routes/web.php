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
// //After POST go to this endpoint and do what method says
Route::post('/all-products', 'PagesController@store');

Route::get('/{product}','PagesController@show');
Route::get('/{product}/edit','PagesController@edit');
Route::patch('/all-products','PagesController@update');
Route::delete('/{product}','PagesController@destroy');

// Since these methods are common there is a shortcut. Resource is a thing which we manipluate for example, Projects
// Route::resource('projects', 'ProjectsController');

// When you construct a controller with  php artisan make:controller - r
// The generator gives boiler plate with full resourceful container class that contains all necessary method steps  

/*

GET     /products           (index)
GET     /products/create    (create)
GET     /products/1         (show)
POST    /products           (store)
GET     /products/1/edit    (edit)
PATCH   /products/1         (update)
DELETE  /products/1         (destroy)

*/

/*

GET     /                   (index)
GET     /add-products       (create)
GET     /1                  (show)
POST    /                   (store)
GET     /1/edit             (edit)
PATCH   /1                  (update)
DELETE  /1                  (destroy)

*/
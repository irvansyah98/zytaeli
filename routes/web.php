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

Route::get('/', 'HomeController@dashboard');
Route::get('/add_order', 'HomeController@add_order');
Route::get('/order/south', 'HomeController@order_south');
Route::get('/order/east', 'HomeController@order_east');
Route::get('/order/central', 'HomeController@order_central');
Route::get('/order/west', 'HomeController@order_west');
Route::post('submit/order', 'HomeController@submit_order');


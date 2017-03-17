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
    return view('producto');
});

Route::resource('producto', 'ProductoController');

Route::get(
    'producto/destroy{id}',
    ['uses' => 'ProductoController@destroy']
);

Route::get(
    'producto/search',
    ['uses' => 'ProductoController@search']
);

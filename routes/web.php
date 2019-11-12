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

Route::get('login', function () {
    return ('Logueado');
});

Route::get('logout', function () {
    return ('Adios');
});

Route::get('productos', function () {
    return ('Productos');
});

Route::get('productos/show/{id}', function ($id) {
    return ('Show ' . $id);
})->where('id', '[0-9]+');


Route::get('productos/create', function () {
    return ('Productos create');
});

Route::get('productos/edit/{id}', function ($id) {
    return ('Edit ' . $id);
})->where('id', '[0-9]+');


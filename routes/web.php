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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', 'BaseController@home');
Route::get('/about', 'BaseController@about');
Route::get('/product', 'BaseController@product');

// Route::get('/barang', 'BarangController@index');

//     Route::get('/test', function () {
//         return view('test');
//     });

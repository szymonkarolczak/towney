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

/* Front page routing */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/policy', function () {
    return view('policy');
});

Route::get('/rodo', function () {
    return view('rodo');
});

/* End front page routing */

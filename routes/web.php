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

Route::get('/login', function () {
    return view('login');
});

/* News routing */

Route::get('news', [NewsController::class, 'index'])->name('news.index');

/* End news routing */

/* End front page routing */

Route::get('firebase','FirebaseController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

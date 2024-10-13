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

Route::get('/', function () {
    return view('welcome');
});

Route::get('sentra-seni', function () {
    return view('sentra.sentra-seni');
});

Route::get('sentra-matematika', function () {
    return view('sentra.sentra-matematika');
});

Route::get('sentra-bahasa', function () {
    return view('sentra.sentra-bahasa');
});

Route::get('sentra-drama', function () {
    return view('sentra.sentra-drama');
});

Route::get('sentra-sains', function () {
    return view('sentra.sentra-sains');
});

Route::get('sentra-imtaq', function () {
    return view('sentra.sentra-imtaq');
});

Route::get('blog', function () {
    return view('sejarah');
});

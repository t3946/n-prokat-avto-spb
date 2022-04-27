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
    return view('main');
});

//from navigation
Route::get('/katalog', function () {
    return view('contacts');
});

Route::get('/podpiska_na_avtomobil', function () {
        return view('katalog');
});

Route::get('/arenda-s-vykupom', function () {
    return view('katalog');
});

Route::get('/tarify', function () {
    return view('katalog');
});

Route::get('/voprosy', function () {
    return view('pages.questions');
});

Route::get('/kontakty', function () {
    return view('katalog');
});

//from footer
Route::get('/partnery', function () {
    return view('main');
});

Route::get('/obzory_avtomobilej', function () {
    return view('main');
});

Route::get('/obzory_avtomobilej', function () {
    return view('main');
});

Route::get('/stati', function () {
    return view('main');
});

Route::get('/programma', function () {
    return view('main');
});

Route::get('/konkurs', function () {
    return view('main');
});

Route::get('/uslugi', function () {
    return view('main');
});

Route::get('/otzyvy', function () {
    return view('main');
});

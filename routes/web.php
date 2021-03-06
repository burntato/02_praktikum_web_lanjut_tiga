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

Route::prefix('product')->group(function() {
    Route::view('/', 'product');
    Route::view('handphone', 'handphone');
    Route::view('code', 'code');
    Route::view('tangan', 'tangan');
    Route::view('laut', 'laut');
});

Route::get('/news/{id?}', function($id = null) {
    return view('news' . $id);
});

Route::prefix('program')->group(function() {
    Route::view('/', 'program');
    Route::view('java', 'java');
    Route::view('c', 'c');
    Route::view('py', 'py');
});

Route::view('/about', 'about');

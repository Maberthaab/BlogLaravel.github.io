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

/*jika ingin membuat route/ halaman menu maka
kita ganti "get('/about',) */

Route::get('/', function () {
    return view('home '); /*laravel akan mencari file index di resources di views */
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Mabertha",
        "email"  => "mabertha.berliana@gmail.com",
        "image" => "logounesa.jpg"
    ]); 
});

Route::get('/blog', function () {
    return view('blog '); 
});



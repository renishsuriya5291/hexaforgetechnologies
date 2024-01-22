<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/service', function () {
    return view('pages.service');
});


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/store', function () {
    return view('pages.store');
});
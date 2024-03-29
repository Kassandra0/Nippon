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
})->name('accueil');

Route::get('/Histoire-Nippon-Kempo', function () {
    return view('histoire-nippon');
})->name('histoire-nippon');

Route::get('/Kata', function () {
    return view('kata');
})->name('kata');

Route::get('/Abritrage', function () {
    return view('arbitrage');
})->name('arbitrage');

Route::get('/Club', function () {
    return view('club');
})->name('club');

Route::get('/Calendrier', function () {
    return view('calendrier');
})->name('calendrier');

Route::get('/Contact', function () {
    return view('contact');
})->name('contact');

Route::get('/mentions-legales', function () {
    return view('mention');
})->name('mention');
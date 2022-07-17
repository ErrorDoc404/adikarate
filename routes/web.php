<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlackBeltController;

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
    return view('index');
})->name('index');

Route::get('/dojo', function () {
    return view('dojo');
})->name('dojo');

Route::get('/chief-instructor', function () {
    return view('chief-instructor');
})->name('chief-instructor');

Route::get('/about/black-belt', [BlackBeltController::class, 'index'])->name('black-belt');

Route::get('/kobudo', function () {
    return view('kobudo');
})->name('kobudo');

Route::get('/branch', function () {
    return view('branch');
})->name('branch');

Route::get('/event-news', function () {
    return view('event-news');
})->name('event-news');

Route::get('/photo', function () {
    return view('photo');
})->name('photo');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

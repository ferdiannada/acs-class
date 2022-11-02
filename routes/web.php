<?php

use Carbon\Carbon;
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
    $title = "Dashboard";
    return view('dashboard', ["title" => $title]);
})->name('dashboard')->middleware('auth');

Route::get('/materi', function () {
    $title = "Materi";
    return view('materi', ["title" => $title]);
})->name('materi');

Route::get('/tugas', function () {
    $title = "Materi";
    return view('tugas', ["title" => $title]);
})->name('tugas');

Route::get('/welcome', function () {
    return view('404');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

// Route Landing Page
Route::get('/', function () {
    return view('index');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/reset', function () {
    return view('reset');
});

// Route Dashboard Users
Route::get('/dashboard', function () {
    return view('dashboard-users.profile');
});

Route::get('/dashboard-aparat', function () {
    return view('dashboard-users.data-aparat');
});

<?php

// use App\Http\Controllers\PageController;
// use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;

// Route::post('/login', [PageController::class, 'login']);

// Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

// Route::get('/   ', [PageController::class, 'dashboard'])->name('dashboard');

// Route::get('/diary/create', [DiaryController::class, 'create'])->name('diary.create');

// Route::get('/profile', [PageController::class, 'profile'])->name('profile');

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route untuk Landing Page
// Route::get('/', [PageController::class, 'landing'])->name('landing');

// // Route untuk Login
// Route::get('/login', function () {
//     return view('login');
// });


Route::get('/', [PageController::class, 'landing'])->name('landing');

Route::get('/login', [PageController::class, 'directtologin'])->name("login");
// Route::post('/login-store', [PageController::class, 'login'])->name("login.store");


// Route::post('/login', [PageController::class, 'login'])->name('login');

Route::post('/login', [PageController::class, 'login'])->name('login.submit');


// Route untuk Dashboard

Route::get('/diary/create', [PageController::class, 'create'])->name('diary.create');

// Route untuk Profile
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');


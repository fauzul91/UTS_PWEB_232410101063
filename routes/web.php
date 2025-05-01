<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'showHomepage'])->name('home');
Route::get('/login', [PageController::class, 'showLogin'])->name('login');
Route::post('/login', [PageController::class, 'login'])->name('login.submit');
Route::post('/logout', [PageController::class, 'logout'])->name('logout');
Route::get('/dashboard', [PageController::class, 'showDashboard'])->name('dashboard');
Route::get('/event', [PageController::class, 'showEvent'])->name('event');
Route::get('/category', [PageController::class, 'showCategory'])->name('category');
Route::get('/profile', [PageController::class, 'showProfile'])->name('profile');
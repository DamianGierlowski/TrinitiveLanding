<?php

use App\Http\Controllers\PolicyController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::get('/privacy-policy', [PolicyController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/cookie-policy', [PolicyController::class, 'cookiePolicy'])->name('cookie.policy');
//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

//Route::view('profile', profile'profile')
//    ->middleware(['auth'])
//    ->name('profile');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'home'])->name('home');

Route::get('/majors', [ClientController::class, 'majors'])->name('majors');

Route::get('/doctors', [ClientController::class, 'doctors'])->name('doctors');

Route::get('/doctor/book/{doctor}', [ClientController::class, 'book'])->name('book-appointment');

Route::get('/contact', [ClientController::class, 'contact'])->name('contact');

Route::prefix('/auth')->group(
    function () {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::get('/register', [AuthController::class, 'register'])->name('register');
    }
);

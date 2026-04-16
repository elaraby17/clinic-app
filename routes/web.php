<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

Route::get('/', [ClientController::class, 'home'])->name('home');

Route::get('/majors', [ClientController::class, 'majors'])->name('majors');

Route::get('/doctors', [ClientController::class, 'doctors'])->name('doctors');

Route::get('/doctor/book/{doctor}', [ClientController::class, 'book'])->name('book-appointment');

Route::get('/contact', [ClientController::class, 'contact'])->name('contact');

Route::prefix('/auth')->group(
    function () {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/login', [AuthController::class, 'signin'])->name('login');
        Route::get('/register', [AuthController::class, 'register'])->name('register');
        Route::post('/register', [AuthController::class, 'signup'])->name('register');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    }
);

Route::prefix('/admin')->name('admin.')->group(
    function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/add-doctors', [AdminController::class, 'addDoctors'])->name('add-doctors');
        Route::get('/all-users', [AdminController::class, 'allUsers'])->name('all-users');
    }
);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\LogoutController;
use App\Http\Controllers\Authentication\RegisterController;
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



Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/admin', function () {
        return view('admin.index');
    });

    Route::post('/logout', [LogoutController::class, 'logout']);
});
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login');

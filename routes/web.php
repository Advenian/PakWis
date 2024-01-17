<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\LogoutController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\TravelPackageController;

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


Route::get('/index', function () {
    return view('admin.content');
})->name('index');
Route::get('/travel-package', function () {
    return view('admin.travel-package-create');
})->name('travel-package-create');

route::post('/travel-package-store', [TravelPackageController::class, 'store'])->name('travel-package-store');
route::get('/travel-package-index', [TravelPackageController::class, 'index'])->name('travel-package-index');

Route::middleware(['checkUserRole:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });

    Route::post('/logout', [LogoutController::class, 'logout']);
});

Route::middleware('checkUserRole:admin,superadmin')->group(function () {
    Route::get('/', function () {
        return view('layout.index');
    })->name('index');
});
Route::middleware('checkUserRole:user,superadmin')->group(function () {
    Route::get('/indexusersuperadmin', function () {
        return view('layout.index');
    })->name('index');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

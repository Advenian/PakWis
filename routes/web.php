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

Route::prefix('admin')->middleware('checkUserRole:admin')->group(function () {
    route::get('/', function () {
        return view('admin.content');
    });

    Route::prefix('travel-package')->group(function () {
        route::post('store', [TravelPackageController::class, 'store'])->name('travel-package-store');
        route::get('index', [TravelPackageController::class, 'index'])->name('travel-package-index');
        route::get('create', [TravelPackageController::class, 'create'])->name('travel-package-create');
        Route::get('{travelPackage}/edit', [TravelPackageController::class, 'edit'])->name('travel-package.edit');
    });
    Route::prefix('user-list')->group(function () {
        route::post('store', [RegisterController::class, 'store'])->name('user-list-store');
        route::get('index', [RegisterController::class, 'index'])->name('user-list-index');
        route::get('create', [RegisterController::class, 'create'])->name('user-list-create');
        Route::get('{user}/edit', [RegisterController::class, 'edit'])->name('user-list.edit');
    });
});

Route::get('/', function () {
    return view('layout.index');
})->name('index');



// Route::middleware('checkUserRole:admin,superadmin')->group(function () {
//     Route::get('/', function () {
//         return view('layout.index');
//     })->name('index');
// });


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\DashbordController;

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
    return view('welcome');
});

Route::get('login', [AdminAuthController::class, 'index'])->name('login');
Route::post('/login-data', [AdminAuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('superadmin-dashboard', [DashbordController::class, 'index'])->name('superadmin.dashboard');
    Route::get('product', [ProductController::class, 'index'])->name('product');
    Route::post('product-data', [ProductController::class, 'store'])->name('product-data');
    Route::get('product/{id}', [ProductController::class, 'editData'])->name('products-edit');
    Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('products-delete');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin-dashbord', [DashbordController::class, 'index'])->name('admin.dashboard');
});



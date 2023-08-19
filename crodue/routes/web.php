<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/add-product', [ProductController::class, 'index'])->name('add-product');
    Route::post('/new-product', [ProductController::class, 'create'])->name('new-product');
    Route::get('/manage-product', [ProductController::class, 'manage'])->name('manage-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
    Route::post('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
    Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
});

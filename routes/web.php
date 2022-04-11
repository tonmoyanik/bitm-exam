<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/detail/{id}', [WebController::class, 'detail'])->name('detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-user', [UserController::class, 'index'])->name('add-user');
    Route::post('/new-user', [UserController::class, 'create'])->name('new-user');
    Route::get('/manage-user', [UserController::class, 'manage'])->name('manage-user');
    Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');
    Route::post('/update-user/{id}', [UserController::class, 'update'])->name('update-user');
    Route::get('/delete-user/{id}', [UserController::class, 'delete'])->name('delete-user');


    Route::get('/add-product', [ProductController::class, 'index'])->name('add-product');
    Route::post('/new-product', [ProductController::class, 'create'])->name('new-product');
    Route::get('/manage-product', [ProductController::class, 'manage'])->name('manage-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit-product');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('update-product');
    Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete-product');

});

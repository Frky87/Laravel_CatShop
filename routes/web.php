<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.app');
});
Route::post('/Order', [WelcomeController::class, 'CreateTransaction'])->name('transaction');
Route::get('/transaksi', [TransactionController::class, 'index']);
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/transaction/cetak', [TransactionController::class, 'cetak']);

// route category
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/tambah', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/category/hapus/{id}', [CategoryController::class, 'delete']);
Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy']);

Route::get('/transaction/transaction-cetak', [TransactionController::class, 'cetak']);
Route::get('/transaction', [TransactionController::class, 'index']);

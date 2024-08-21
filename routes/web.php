<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CookieController;

Route::get('/', [CookieController::class, 'index'])->name('cookies.index');
Route::get('/cookies/create', [CookieController::class, 'create'])->name('cookies.create');
Route::post('/cookies', [CookieController::class, 'store'])->name('cookies.store');
Route::get('/cookies/{id}', [CookieController::class, 'show'])->name('cookies.show');
Route::get('/cookies/{id}/edit', [CookieController::class, 'edit'])->name('cookies.edit');
Route::put('/cookies/{id}', [CookieController::class, 'update'])->name('cookies.update');
Route::delete('/cookies/{id}', [CookieController::class, 'destroy'])->name('cookies.destroy');


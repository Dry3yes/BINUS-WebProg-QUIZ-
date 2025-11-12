<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EduFunController;

Route::get('/', [EduFunController::class, 'home'])->name('home');

Route::get('/category/{category}', [EduFunController::class, 'category'])->name('category');
Route::get('/detail/{id}', [EduFunController::class, 'detail'])->name('detail');

Route::get('/writers', [EduFunController::class, 'writers'])->name('writers');
Route::get('/writer/{name}', [EduFunController::class, 'writerDetail'])->name('writer.detail');

Route::get('/about', [EduFunController::class, 'about'])->name('about');
Route::get('/popular', [EduFunController::class, 'popular'])->name('popular');

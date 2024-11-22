<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('tasks', TaskController::class);
Route::resource('categories', CategoryController::class);

require __DIR__.'/auth.php';

// Route::group(['middleware' => ['role:admin']], function () {
//     // Rute yang hanya dapat diakses oleh pengguna dengan peran 'admin'
//       Route::get('/admin', [AdminController::class, 'index']);

//  });

// // Route::group(['middleware' => ['can:create posts']], function () {  });

// Route::middleware(['auth', 'permission:create posts'])->group(function () {
//     // Rute yang hanya dapat diakses oleh pengguna dengan izin 'create posts'
//     Route::post('/posts', [PostController::class, 'store']);
// });
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminEmpuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri');
Route::view('/kontak', 'kontak')->name('kontak');

Route::get('/berita', [PostController::class, 'index'])->name('berita.index');
Route::get('/berita/{post:slug}', [PostController::class, 'show'])->name('berita.show');

/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes (Protected)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('berita', AdminPostController::class)->names('dashboard.berita')->parameters([
        'berita' => 'post'
    ]);
    Route::resource('galeri', AdminGalleryController::class)->names('dashboard.galeri')->parameters([
        'galeri' => 'galeri'
    ]);
    Route::resource('empu', AdminEmpuController::class)->names('dashboard.empu')->parameters([
        'empu' => 'empu'
    ]);
});

/*
|--------------------------------------------------------------------------
| Profile Routes (Breeze)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

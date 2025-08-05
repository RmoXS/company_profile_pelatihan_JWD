<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('contents.home');
});

Route::get('/profile', function () {
    return view('contents.profile');
});

Route::get('/visi-misi', function () {
    return view('contents.visiMisi');
});

Route::get('/contact', function () {
    return view('contents.kontak');
});

Route::get('/about', function () {
    return view('contents.tentang');
});

Route::get('/artikel/{id}', [ArticleController::class, 'showById'])->name('artikel.id');

Route::get('/event', function () {
    return view('pages.event');
});

Route::get('/foto-klien', function () {
    return view('pages.klien');
});

// Authentication Routes
Route::get('/sign-up', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/sign-up', [AuthController::class, 'register'])->name('register.post');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', function () {
    return view('admin.main');
})->middleware('auth');

Route::get('/admin/kelola-artikel', [ArticleController::class, 'index'])->name('admin.articles')->middleware('auth');
Route::get('/admin/kelola-artikel/tambah', [ArticleController::class, 'create'])->name('artikel.create')->middleware('auth');
Route::post('/admin/kelola-artikel/tambah', [ArticleController::class, 'store'])->name('artikel.store')->middleware('auth');
Route::delete('/admin/kelola-artikel/{id}', [ArticleController::class, 'destroy'])->name('artikel.destroy')->middleware('auth');

Route::get('/admin/kelola-produk', [ProductController::class, 'index'])->name('admin.products')->middleware('auth');
Route::get('/produk', [ProductController::class, 'noAuthIndex'])->name('produk.index');
Route::get('/admin/kelola-produk/tambah', [ProductController::class, 'create'])->name('produk.create')->middleware('auth');
Route::post('/admin/kelola-produk/tambah', [ProductController::class, 'store'])->name('produk.store')->middleware('auth');
Route::delete('/admin/kelola-produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy')->middleware('auth');

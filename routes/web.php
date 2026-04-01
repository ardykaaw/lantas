<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/berita', [PublicController::class, 'berita'])->name('berita.index');
Route::get('/berita/{slug}', [PublicController::class, 'showBerita'])->name('berita.show');
Route::get('/cctv', [PublicController::class, 'cctv'])->name('cctv');

// Admin Routes (CMS)
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        // News Management 
        Route::resource('berita', App\Http\Controllers\Admin\PostController::class)->names([
            'index' => 'admin.berita.index',
            'create' => 'admin.berita.create',
            'store' => 'admin.berita.store',
            'edit' => 'admin.berita.edit',
            'update' => 'admin.berita.update',
            'destroy' => 'admin.berita.destroy',
        ]);
        // Officers / Pejabat Management
        Route::resource('pejabat', App\Http\Controllers\Admin\OfficerController::class)->names([
            'index' => 'admin.pejabat.index',
            'create' => 'admin.pejabat.create',
            'store' => 'admin.pejabat.store',
            'edit' => 'admin.pejabat.edit',
            'update' => 'admin.pejabat.update',
            'destroy' => 'admin.pejabat.destroy',
        ]);
        
        // Gallery Management
        Route::resource('galeri', App\Http\Controllers\Admin\GalleryController::class)->names([
            'index' => 'admin.galeri.index',
            'create' => 'admin.galeri.create',
            'store' => 'admin.galeri.store',
            'destroy' => 'admin.galeri.destroy',
        ])->except(['edit', 'update', 'show']);
    });
});

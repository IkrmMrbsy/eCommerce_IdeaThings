<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'allProducts'])->name('product.paginate');

Route::get('/detail/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/UMKM', [ProductController::class, 'umkm'])->name('umkm');

Route::get('/fashion', [ProductController::class, 'fashion'])->name('fashion');

Route::get('/pakaianpria', [ProductController::class, 'pakaianPria'])->name('pakaianpria');

Route::get('/pakaianwanita', [ProductController::class, 'pakaianWanita'])->name('pakaianwanita');

Route::get('/taspria', [ProductController::class, 'tasPria'])->name('taspria');

Route::get('/taswanita', [ProductController::class, 'tasWanita'])->name('taswanita');

Route::get('/aksesoris', [ProductController::class, 'aksesoris'])->name('aksesoris');

Route::get('/search', [SearchController::class, 'search'])->name('search');

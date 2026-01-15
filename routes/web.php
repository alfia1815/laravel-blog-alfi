<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| HALAMAN AWAL
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| DASHBOARD (ADMIN / USER)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->get('/dashboard', function () {

    if (auth()->user()->role === 'admin') {
        return view('admin.dashboard');
    }

    return view('user.dashboard');

})->name('dashboard');

/*
|--------------------------------------------------------------------------
| BLOG USER (LIST ARTIKEL)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->get('/blog', [ArticleController::class, 'publicIndex'])
    ->name('blog.index');

/*
|--------------------------------------------------------------------------
| BLOG USER (DETAIL / BACA ARTIKEL)  ✅ DITAMBAHKAN
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->get('/blog/{article}', [ArticleController::class, 'showPublic'])
    ->name('blog.show');

/*
|--------------------------------------------------------------------------
| ADMIN - ARTIKEL
|--------------------------------------------------------------------------
*/
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('articles', ArticleController::class);
    });

require __DIR__.'/auth.php';

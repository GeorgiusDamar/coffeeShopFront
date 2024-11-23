<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

// });
Route::prefix('admin')->group(function () {
    Route::get('broadcast', function () {
        return view('admin.broadcast');
    })->name('admin.broadcast');

    Route::get('menu', function () {
        return view('admin.menu');
    })->name('admin.menu');

    Route::get('tambah-menu', function () {
        return view('admin.tambah');
    })->name('admin.tambah.menu');

    Route::get('edit-menu', function () {
        return view('admin.edit');
    })->name('admin.edit.menu');
});



Route::prefix('user')->group(function () {
    Route::get('menu', function () {
        return view('user.menu');
    })->name('user.menu');
});



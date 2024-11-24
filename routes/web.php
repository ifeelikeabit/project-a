<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/page', [App\Http\Controllers\Admin\PageController::class, 'index'])->name('pages');


    Route::get('/admin/page/show/{id}', [App\Http\Controllers\Admin\PageController::class, 'show'])->name('show');

    Route::get('/admin/page/edit/{id}', [App\Http\Controllers\Admin\PageController::class, 'edit'])->name('edit');

    Route::post('/admin/page/update/{id}', [App\Http\Controllers\Admin\PageController::class, 'update'])->name('update');

    Route::get('/admin/page/create', [App\Http\Controllers\Admin\PageController::class, 'create'])->name('create');

    Route::post('/admin/page/store', [App\Http\Controllers\Admin\PageController::class, 'store'])->name('store');
});




Route::middleware(['auth'])->group(function () {
    Route::get('/admin/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');


    Route::get('/admin/user/show/{id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('user.show');

    Route::get('/admin/user/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('user.edit');

    Route::post('/admin/user/update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('update');

    Route::get('/admin/user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('user.create');

    Route::post('/admin/user/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('user.store');
});
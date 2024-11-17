<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\user\backend\user\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix(env('APP_BACKEND'))->middleware('auth')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'show'])->name('users.show')->middleware('can:users_show');
        Route::get('/create', [UserController::class, 'create'])->name('users.create')->middleware('can:users_create')    ;
        Route::get('/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('can:users_edit');
        Route::get('/delete', [UserController::class, 'delete'])->name('users.delete')->middleware('can:users_delete');
    });
});
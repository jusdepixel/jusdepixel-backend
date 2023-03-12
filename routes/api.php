<?php

use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', \App\Http\Controllers\IndexController::class)->name('index');

Route::prefix('/users')->group(static function() {
    Route::get('/', [UserController::class, 'index'])->name('users@index');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users@edit');
    Route::patch('/{user}/update', [UserController::class, 'update'])->name('users@update');
});

Route::prefix('/domains')->group(static function() {
    Route::get('/', [DomainController::class, 'index'])->name('domain@index');
    Route::get('/{domain}', [DomainController::class, 'show'])->name('domain@show');
    Route::get('/create', [DomainController::class, 'create'])->name('domain@create');
    Route::get('/{slug}/edit', [DomainController::class, 'edit'])->name('domain@edit');
    Route::post('/store', [DomainController::class, 'store'])->name('domain@store');
    Route::post('/{domain}/destroy', [DomainController::class, 'destroy'])->name('domain@destroy');
    Route::patch('/{domain}/update', [DomainController::class, 'update'])->name('domain@update');
});

<?php

use App\Http\Controllers\DomainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/domains')->group(static function() {
    Route::get('/', [DomainController::class, 'index'])->name('domain@index');
    Route::get('/show/{domain}', [DomainController::class, 'show'])->name('domain@show');
    Route::get('/create', [DomainController::class, 'create'])->name('domain@create');
    Route::get('/edit', [DomainController::class, 'edit'])->name('domain@edit');
    Route::post('/store', [DomainController::class, 'store'])->name('domain@store');
    Route::post('/destroy/{domain}', [DomainController::class, 'destroy'])->name('domain@destroy');
    Route::patch('/update/{domain}', [DomainController::class, 'update'])->name('domain@update');
});

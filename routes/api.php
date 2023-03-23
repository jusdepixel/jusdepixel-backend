<?php

use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\MeController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Index\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);
Route::get('/domains', [DomainController::class, 'index']);
Route::get('/me', [MeController::class, 'index']);
Route::get('/jobs', [JobController::class, 'index']);

Route::middleware(['auth:sanctum'])
    ->get('/user', function (Request $request) {
        return $request->user();
});

Route::prefix('/admin')
    ->middleware(['auth'])
    ->group(static function() {
        Route::get('/module/{slug}', ModuleController::class);
        Route::resource('/users', UserController::class);
        Route::resource('/domains', DomainController::class);
});

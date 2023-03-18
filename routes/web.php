<?php

use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;

Route::get('/token', TokenController::class);

require __DIR__.'/auth.php';

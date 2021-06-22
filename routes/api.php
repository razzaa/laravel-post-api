<?php

use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
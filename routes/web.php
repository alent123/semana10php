<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/games', [GameController::class, 'index']);
Route::get('/games/create', [GameController::class, 'create']);
Route::get('/games/list', [GameController::class, 'list']);
Route::get('/games/{game}/{category?}', [GameController::class, 'help']);

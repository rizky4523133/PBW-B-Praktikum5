<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PesanTamuController;

Route::get('/', [PageController::class, 'home']);
Route::get('/bukutamu', [PesanTamuController::class, 'index']);
Route::post('/bukutamu', [PesanTamuController::class, 'store']);



// });

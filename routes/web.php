<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SortController;



Route::get('/', [SortController::class, 'show']);
Route::post('/', [SortController::class, 'show']);
Route::get('/admin', [SortController::class, 'change']);
Route::post('/admin', [SortController::class, 'vax']);

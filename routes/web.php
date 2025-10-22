<?php

use App\Http\Controllers\TrackerController;
use Illuminate\Support\Facades\Route;

// Any other url will be redirected back to the 
Route::fallback(function () {
    return redirect('/');
});

Route::get('/', [TrackerController::class, 'index']);
Route::get('/search', [TrackerController::class, 'search']);
Route::get('/track', [TrackerController::class, 'show']);

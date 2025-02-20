<?php

use App\Http\Controllers\nilaiController;
use App\Http\Controllers\PrediksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('example')->group(function(){
    Route::get('/',[nilaiController::class, 'Index']);
    Route::get('/create',[nilaiController::class, 'create']);
    Route::post('/store',[nilaiController::class, 'store']);
});
Route::prefix('predict')->group(function(){
    Route::get('/train',[PrediksiController::class, 'train']);
    Route::post('/predict',[PrediksiController::class, 'predict'])->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);
});

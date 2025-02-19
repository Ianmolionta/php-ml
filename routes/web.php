<?php

use App\Http\Controllers\nilaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('example')->group(function(){
    Route::get('/',[nilaiController::class, 'Index']);
    Route::get('/create',[nilaiController::class, 'create']);
    Route::post('/store',[nilaiController::class, 'store']);
});

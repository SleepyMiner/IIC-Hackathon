<?php
use App\Http\Controllers\SoilTestController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SoilTestController::class, 'index']);
Route::post('/analyze', [SoilTestController::class, 'analyze'])->name('analyze');

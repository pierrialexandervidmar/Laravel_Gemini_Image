<?php

use App\Http\Controllers\GeminiImageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [GeminiImageController::class, 'create'])->name('gemini-image.create');
Route::post('/gemini-image', [GeminiImageController::class, 'store'])->name('gemini-image.store');
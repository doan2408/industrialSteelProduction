<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/category', [HomeController::class, 'category'])->name('category');
Route::post('/hook', [HomeController::class, 'hook'])->name('hook');
Route::middleware('auth:sanctum')->group( function () {
	
});
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Data;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected Routes

Route::middleware('auth:sanctum')->group(function(){
    Route::prefix('users')->controller(UsersController::class)->group(function(){
        Route::get('/',  'index');
        Route::get('/{id}',  'show');
        Route::post('update/{id}',  'update');
        Route::post('/create',  'store');
        Route::delete('/{id}',  'destroy');
    });
});

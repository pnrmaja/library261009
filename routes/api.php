
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LendingController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book}', [BookController::class, 'show']);
Route::post('/books', [BookController::class, 'store']);
Route::put('/books/{book}', [BookController::class, 'update']);
Route::delete('/books/{book}', [BookController::class, 'destroy']);

Route::get('/copies', [CopyController::class, 'index']);
Route::get('/copies/{copy}', [CopyController::class, 'show']);
Route::post('/copies', [CopyController::class, 'store']);
Route::put('/copies/{copy}', [CopyController::class, 'update']);
Route::delete('/copies/{copy}', [CopyController::class, 'destroy']);

Route::get('/lendings', [LendingController::class, 'index']);
Route::get('/lendings/{user_id}/{copy_id}', [LendingController::class, 'show']);
Route::post('/lendings', [LendingController::class, 'store']);
Route::put('/lendings/{user_id}/{copy_id}', [LendingController::class, 'update']);
Route::delete('/lendings/{user_id}/{copy_id}', [LendingController::class, 'destroy']);

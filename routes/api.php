<?php
use App\Http\Controllers\Api\BookController;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', BookController::class);
Route::get('books', [BookController::class, 'index']);
Route::post('books', [BookController::class, 'store']);
Route::get('books/{id}', [BookController::class, 'show']);
Route::put('books/{id}', [BookController::class, 'update']);
Route::delete('books/{id}', [BookController::class, 'destroy']);
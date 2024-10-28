<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('home');
Route::post('/', [MainController::class, 'prepare'])->name('prepare');
Route::get('/game', [MainController::class, 'game'])->name('game');
Route::get('/answer/{answer}', [MainController::class, 'answer'])->name('answer');
Route::get('/next', [MainController::class, 'next'])->name('next');
Route::get('/show', [MainController::class, 'show'])->name('show');

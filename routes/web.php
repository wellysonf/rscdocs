<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/users/{user}/documents', [UserController::class, 'documents'])->name('users.documents');

Route::get('/documents/create', [DocumentController::class, 'create'])->name('documents.create');
Route::post('/documents', [DocumentController::class, 'store'])->name('documents.store');

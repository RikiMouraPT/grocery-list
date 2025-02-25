<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ItemController::class, 'index']);

Route::post('/add-item', [ItemController::class, 'addItem'])->name('add-item');

Route::post('/reset-list', [ItemController::class, 'resetList'])->name('reset-list');

Route::delete('/delete-item/{id}', [ItemController::class, 'deleteItem'])->name('delete-item');

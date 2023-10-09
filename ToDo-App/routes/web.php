<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', [App\Http\Controllers\ToDoController::class, 'index'])->name('todo');

Route::post('/store', [App\Http\Controllers\ToDoController::class, 'store'])->name('store_toDo');

Route::delete('/{id}', [App\Http\Controllers\ToDoController::class, 'destroy'])->name('delete_toDo');

Route::put('/{id}', [App\Http\Controllers\ToDoController::class, 'update'])->name('update_toDo');

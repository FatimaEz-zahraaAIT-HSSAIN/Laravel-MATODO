<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaticController;
use App\Http\Controllers\AuthManager;

use App\Http\Controllers\TasksController;


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

Route::get('/', [StaticController::class, 'index'] )->name('home');
Route::get('/register', [StaticController::class, 'register'] )->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'] )->name('register.post');
Route::get('/login', [StaticController::class, 'login'] )->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'] )->name('login.post');
Route::get('/logout', [AuthManager::class, 'logout'] )->name('logout');
Route::post('/todos', [TasksController::class, 'store'])->name('todos.store');
Route::get('/todos', [TasksController::class, 'index'])->name('todos.index');
Route::get('/todos/delete/{task_id}', [TasksController::class, 'deleteTask']);
Route::get('/todos/edit/{task_id}', [TasksController::class, 'editTask']);
Route::get('/todos/edit', [StaticController::class, 'edit'] )->name('edit');
Route::post('/update', [TasksController::class, 'update'] )->name('todos.update');



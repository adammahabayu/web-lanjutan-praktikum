<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\LoginController;

Route::get('/', [TaskController::class, 'index'])->name('home');

Route::get('/', [LoginController::class, 'index'])->name('home');
Route::resource('tasks', TaskController::class);
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/user/{id}', function ($id) {
//     return "Profil pengguna dengan ID: " . $id;
// });
// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         return "Daftar pengguna";
//     });
//     Route::get('/posts', function () {
//         return "Daftar post";
//     });
// });
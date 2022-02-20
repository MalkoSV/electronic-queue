<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
  '/',
  [\App\Http\Controllers\TasksController::class, 'fillTable']
)->name('main');

Route::get(
  '/update/{id}',
  [\App\Http\Controllers\TasksController::class, 'addTaskCounter']
);

Route::get(
  '/queue/{status}',
  [\App\Http\Controllers\LogsController::class, 'show']
);

Route::get(
  '/towork',
  [\App\Http\Controllers\LogsController::class, 'getToWork']
);

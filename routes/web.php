<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/folders', [TaskController::class, 'index']);
Route::get('/folders/{folder}/tasks', [TaskController::class, 'show']);
Route::get('/folders/{folder}/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks',[TaskController::class, 'store']);
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/folders', [TaskController::class, 'index'])->name('index');
Route::get('folders/create', [FolderController::class, 'create']);
Route::post('/folders/store', [FolderController::class, 'store']);
Route::get('/folders/{folder}/tasks', [TaskController::class, 'show']);
Route::get('/folders/{folder}/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks',[TaskController::class, 'store']);
Route::get('/folders/{folder}/tasks/{task}/edit', [TaskController::class, 'edit']);
Route::put('/folders/{folder}/tasks/{task}', [TaskController::class, 'update']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AdminController::class, 'index'])->name('admin.index');
Route::post('/', [AdminController::class, 'save'])->name('admin.save');
Route::get('/{id}', [AdminController::class, 'delete'])->name('admin.delete');
Route::post('/{id}', [AdminController::class, 'update'])->name('admin.update');

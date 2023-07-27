<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [HomeController::class, 'create'])->name('admin.create');
Route::post('/admin', [HomeController::class, 'store'])->name('admin.store');
Route::put('/admin/{id}', [HomeController::class, 'update'])->name('admin.update');
Route::get('/admin/{id}/edit', [HomeController::class, 'edit'])->name('admin.edit');
Route::get('/admin/{id}', [HomeController::class, 'show'])->name('admin.show');

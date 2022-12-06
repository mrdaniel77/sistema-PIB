<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\MembroController;
use App\Http\Controllers\DizimoController;

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


Route::get('/', [DashboardController::class, 'index']);

Route::get('/membro', [MembroController::class, 'index']);
Route::get('/membro/create', [MembroController::class, 'create']);
Route::get('/membro/edit/{id}',[MembroController::class, 'edit']);
Route::post('/membro/store',[MembroController::class, 'store']);
Route::get('/membro/delete/{id}', [MembroController::class, 'delete']);


Route::get('/dizimo', [DizimoController::class, 'index']);
Route::get('/dizimo/create', [DizimoController::class, 'create']);
Route::get('/dizimo/edit/{id}',[DizimoController::class, 'edit']);
Route::post('/dizimo/store',[DizimoController::class, 'store']);
Route::get('/dizimo/delete/{id}', [DizimoController::class, 'delete']);

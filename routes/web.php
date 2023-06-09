<?php

namespace App\Http\Controllers;
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

Route::get('/',[CurdController::class,'index'])->name('index');
Route::get('/create',[CurdController::class,'create'])->name('Curd.create');
Route::post('/store',[CurdController::class,'store'])->name('Curd.store');
Route::get('/delete/{id}',[CurdController::class,'destroy'])->name('delete');
Route::get('/edit/{id}',[CurdController::class,'edit'])->name('edit');
Route::post('/update',[CurdController::class,'update'])->name('Curd.update');
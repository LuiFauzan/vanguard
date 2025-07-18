<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/beranda',[BerandaController::class,'index'])->name('beranda');
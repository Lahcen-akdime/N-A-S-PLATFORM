<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register'); 
    });
Route::post('/create',[LoginController::class,"create"])->name('create');
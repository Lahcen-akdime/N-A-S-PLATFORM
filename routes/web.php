<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return view('register'); });
Route::get('/', function () { return view('Home'); });
Route::controller(LoginController::class)->group(function (){
    Route::get('/shoose','shoose');
    });
Route::resource('login',LoginController::class);

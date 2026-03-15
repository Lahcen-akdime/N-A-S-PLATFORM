<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\ClientController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return view('register'); });
Route::get('/', function () { return view('Home'); })->name('home');
Route::controller(LoginController::class)->group(function (){
Route::get('/shoose','shoose');
Route::get('/Logout','Logout')->name('Logout');
});
Route::resource('login',LoginController::class);
Route::resource('client',ClientController::class);

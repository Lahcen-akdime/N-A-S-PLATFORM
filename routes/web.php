<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\DemandeController;
use App\Http\Middleware\login_middleware;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
     return view('Home',['user'=>null]); 
})->name('home');

Route::controller(LoginController::class)->group(function (){
    Route::get('/shoose','shoose')->name('roleChoices');
    Route::get('/Logout','Logout')->name('Logout');
});

Route::resource('login',LoginController::class);

Route::middleware(login_middleware::class)->group(function () {
    Route::resource('client',ClientController::class);
    Route::resource('demande',DemandeController::class);
    Route::name('Dashboard')->group(function (){
        Route::get('/home',[ClientController::class,'index']);
    });
});

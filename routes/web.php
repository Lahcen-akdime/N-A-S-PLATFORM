<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\DemandeController as ClientDemandeController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\Worker\WorkerController;
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

Route::resource('client',ClientController::class)->except('index');
Route::resource('login',LoginController::class);
Route::get('worker/profile/{id}',[WorkerController::class,'show']);
Route::middleware(login_middleware::class)->group(function () {
    Route::resource('client',ClientController::class)->only('index');
    Route::resource('demande',ClientDemandeController::class);
    Route::name('Dashboard')->group(function (){
        Route::get('/home',[ClientController::class,'index']);
    });
});

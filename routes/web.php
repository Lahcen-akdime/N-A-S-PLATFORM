<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\DemandeController ;
use App\Http\Controllers\Client\LocateController;
use App\Http\Controllers\Controller;
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
Route::get('/worker/wait',[WorkerController::class,'wait'])->name('wait');
Route::resource('worker',WorkerController::class);
Route::resource('client',ClientController::class)->except('index');
 // midleware ???
Route::resource('login',LoginController::class);
Route::get('worker/profile/{id}',[WorkerController::class,'show']);
Route::middleware(login_middleware::class)->group(function () {
    Route::resource('client',ClientController::class)->only('index');
    Route::resource('demande',DemandeController::class);
    Route::name('Dashboard')->group(function (){
        Route::get('/home',[ClientController::class,'index']);
    });
});

Route::resource('Admin',AdminController::class);
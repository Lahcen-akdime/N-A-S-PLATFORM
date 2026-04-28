<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\DemandeController ;
use App\Http\Controllers\Client\LocateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Worker\DemandeController as WorkerDemandeController;
use App\Http\Controllers\Worker\WorkerController;
use App\Http\Middleware\login_middleware;
use Illuminate\Support\Facades\Route;


Route::get('/',[Controller::class,'index'])->name('home');

Route::controller(LoginController::class)->group(function (){
    Route::get('/shoose','shoose')->name('roleChoices');
    Route::get('/Logout','Logout')->name('Logout');
});
Route::get('/worker/wait',[WorkerController::class,'wait'])->name('wait');
Route::resource('worker',WorkerController::class);
Route::resource('client',ClientController::class)->except('index');
 // midleware ???
Route::resource('login',LoginController::class);
Route::get('profile/{id}',[WorkerController::class,'show']);
Route::middleware(login_middleware::class)->group(function () {
    Route::resource('client',ClientController::class)->only('index');
    Route::resource('demande',DemandeController::class);
    Route::name('Dashboard')->group(function (){
    Route::get('/home',[ClientController::class,'index']) ;
    });
});

Route::resource('workerDemandes',WorkerDemandeController::class) ;

Route::resource('Admin',AdminController::class);
Route::patch('/accept/{worker}',[AdminController::class,'accept'])->name('accept');
Route::resource('work',WorkController::class);

Route::resource('contact',ContactController::class);
Route::resource('locate',LocateController::class);
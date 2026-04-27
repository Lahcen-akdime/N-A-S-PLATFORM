<?php

use App\Http\Controllers\Client\LocateController;
use App\Http\Controllers\Worker\WorkerController;
use Illuminate\Support\Facades\Route;

Route::get('/workers/{work}',[LocateController::class,'index']);
Route::get('/workerr',[WorkerController::class,'test']);
<?php

use App\Http\Controllers\Client\LocateController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

Route::get('/workers/{work}/{evaluation}',[LocateController::class,'index']);
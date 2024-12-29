<?php

use App\Http\Controllers\ProvinsiController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProvinsiController::class,'index']);

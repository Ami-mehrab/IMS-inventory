<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('master');
// });


Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
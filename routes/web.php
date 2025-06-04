<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('master');
// });


Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');

//route for backend
Route ::get('/product/create',[ProductController::class,'form'])->name('product.create');
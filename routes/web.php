<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Models\category;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('master');
// });


Route::group(['prefix'=>'admin'],function(){


//login 
Route ::get('/login',[AuthenticationController::class,'viewlogin'])->name('view.login');
Route ::post('/loggedin',[AuthenticationController::class,'afterlogin'])->name('log.in');

Route::group(['middleware'=>'auth'],function(){

    Route::get('/logout',[AuthenticationController::class,'logout'])->name('log.out');

    Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');



    //route for backend.crud
    
    //product
    Route ::get('/product/list',[ProductController::class,'list'])->name('product.list');
    Route ::get('/product/create',[ProductController::class,'form'])->name('product.create');
    Route ::post('/product/store',[ProductController::class,'store'])->name('product.store');
    Route ::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
    
    //category
    Route::get('/category/list',[CategoryController::class,'list'])->name('cat.list');
    Route::get('/category/create',[CategoryController::class,'form'])->name('cat.create');
    Route ::post('/category/store',[CategoryController::class,'store'])->name('cat.store');
    Route ::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('cat.delete');
    

});
});

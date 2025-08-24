<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductsController;


// Route::get('/index', function () {
//     return view('index');
// });
Route::post('/new', function () {
    return view('addProduct');
});
Route::post('/add',[ProductsController::class,'store']);
Route::post('/edit/{id}',[ProductsController::class,'edit']);
Route::get('/',[ProductsController::class,'index']);
Route::post('/update/{product}',[ProductsController::class,'update']);
Route::post('/delete/{id}',[ProductsController::class,'destroy']);
Route::post('/search',[ProductsController::class,'search']);
Route::post('/filter',[ProductsController::class,'filter']);

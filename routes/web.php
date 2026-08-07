<?php
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',[HomeController::class,'index']);
Route::get('/products',[ProductController::class,'index']);
Route::get('/products/create',[ProductController::class,'create']);
Route::post('/products', [ProductController::class, 'store']);

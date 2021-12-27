<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);

Auth::routes();

Route::middleware(['auth','admin'])->group(function () {

    Route::get('/redirect',[AdminController::class,'index']);

// Banner
Route::get('banners',[BannerController::class,'index']);
Route::post('banners/create',[BannerController::class,'store']);
Route::get('banners/store',[BannerController::class,'create']);
Route::get('banners/delete/{id}',[BannerController::class,'delete']);
Route::get('banners/edit/{id}',[BannerController::class,'edit']);
Route::post('banners/update/{id}',[BannerController::class,'update']);
Route::resource('categories',CategoryController::class);

Route::resource('/brands',BrandController::class);
Route::resource('/products',ProductController::class);


    
});



// category
Route::get('products-category/{slug}',[HomeController::class,'product_category']);
// brands


// product

Route::get('product_detail/{id}',[HomeController::class,'product_details']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use Illuminate\Database\Schema\SQLiteBuilder;

//Route::get('/', function () {
   // return view('welcome');
//});

//client controller 
Route::get('/',[clientController::class,"acceil"]);
Route::get('/boutique',[clientController::class,"boutique"]);
Route::get('/panier',[clientController::class,"panier"]);
Route::get('/paiement',[clientController::class,"paiement"]);
Route::get('/enregistrer',[clientController::class,"enregistrer"]);
Route::get('/sauvegarder',[clientController::class,"sauvegarder"]);

// admin controller

Route::get('/admin',[adminController::class,"home"]);
Route::get('/admin/addcategory',[adminController::class,"addcategory"]);
Route::get('/admin/category',[adminController::class,"category"]);
Route::get('/admin/addsliders',[adminController::class,"addsliders"]);
Route::get('/admin/sliders',[adminController::class,"sliders"]);
Route::get('/admin/product',[adminController::class,"product"]);
Route::get('/admin/addproduct',[adminController::class,"addproduct"]);
Route::get('/admin/orders',[adminController::class,"orders"]);

// category controller

Route::post('admin/saveCategory',[CategoryController::class,"saveCategory"]);
Route::delete('admin/deletecategory/{id}', [CategoryController::class, 'deletecategory']);
Route::get('admin/editcategory/{id}', [CategoryController::class, 'editcategory']);
Route::put('admin/updatecategory/{id}', [CategoryController::class, 'updatecategory']);

// slider controller

Route::post('admin/saveslider',[SliderController::class,"saveslider"]);
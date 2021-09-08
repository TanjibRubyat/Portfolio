<?php

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

Route::get('/', function () {
    return view('master');
});


Route::get('/category-create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category-create',[CategoryController::class,'store'])->name('category.store');
Route::get('/category-index',[CategoryController::class,'index'])->name('category.index');
Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::put('/category-edit',[CategoryController::class,'update'])->name('category.update');

Route::get('/product-create',[ProductController::class,'create'])->name('product.create');
Route::post('/product-create',[ProductController::class,'store'])->name('product.store');
Route::get('/product-index',[ProductController::class,'index'])->name('product.index');
Route::get('/product-edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product-edit',[ProductController::class,'update'])->name('product.update');
Route::post('/product-destroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');


Route::get('/order-index',[OrdersController::class,'index'])->name('order.index');
Route::get('/order-show/{id}',[OrdersController::class,'show'])->name('order.show');
Route::get('/order-invoice/{id}',[OrdersController::class,'invoice'])->name('order.invoice');
Route::post('/order-change-status/{id}',[OrdersController::class,'changeStatus'])->name('order.change-status');


Route::get('/payment-create',[PaymentController::class,'create'])->name('payment.create');
Route::post('/payment-create',[PaymentController::class,'store'])->name('payment.store');
Route::get('/payment-index',[PaymentController::class,'index'])->name('payment.index');
Route::get('/payment-edit/{id}',[PaymentController::class,'edit'])->name('payment.edit');
Route::put('/payment-edit',[PaymentController::class,'update'])->name('payment.update');
Route::post('/payment-destroy/{id}',[PaymentController::class,'destroy'])->name('payment.destroy');
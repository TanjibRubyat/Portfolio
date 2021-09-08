<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/home-create',[HomeController::class,'create'])->name('home.create');
Route::post('/home-create',[HomeController::class,'store'])->name('home.store');
Route::get('/home-index',[HomeController::class,'index'])->name('home.index');
Route::get('/home-edit/{id}',[HomeController::class,'edit'])->name('home.edit');
Route::put('/home-edit',[HomeController::class,'update'])->name('home.update');
Route::post('/home-destroy/{id}',[HomeController::class,'destroy'])->name('home.destroy');

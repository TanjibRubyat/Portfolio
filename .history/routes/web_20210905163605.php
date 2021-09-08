<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;

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

Route::get('/skill-create',[HomeController::class,'create'])->name('home.create');
Route::post('/skill-create',[HomeController::class,'store'])->name('home.store');
Route::get('/skill-index',[HomeController::class,'index'])->name('home.index');
Route::get('/skill-edit/{id}',[HomeController::class,'edit'])->name('home.edit');
Route::put('/skill-edit',[HomeController::class,'update'])->name('home.update');
Route::post('/skill-destroy/{id}',[HomeController::class,'destroy'])->name('home.destroy');

Route::get('/skill-create',[SkillController::class,'create'])->name('skill.create');
Route::post('/skill-create',[SkillController::class,'store'])->name('skill.store');
Route::get('/skill-index',[SkillController::class,'index'])->name('skill.index');
Route::get('/skill-edit/{id}',[SkillController::class,'edit'])->name('skill.edit');
Route::put('/skill-edit',[SkillController::class,'update'])->name('skill.update');
Route::post('/skill-destroy/{id}',[SkillController::class,'destroy'])->name('skill.destroy');
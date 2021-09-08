<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ServiceController;

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

Route::get('/skill-create',[SkillController::class,'create'])->name('skill.create');
Route::post('/skill-create',[SkillController::class,'store'])->name('skill.store');
Route::get('/skill-index',[SkillController::class,'index'])->name('skill.index');
Route::get('/skill-edit/{id}',[SkillController::class,'edit'])->name('skill.edit');
Route::put('/skill-edit',[SkillController::class,'update'])->name('skill.update');
Route::post('/skill-destroy/{id}',[SkillController::class,'destroy'])->name('skill.destroy');

Route::get('/experience-create',[ExperienceController::class,'create'])->name('experience.create');
Route::post('/experience-create',[ExperienceController::class,'store'])->name('experience.store');
Route::get('/experience-index',[ExperienceController::class,'index'])->name('experience.index');
Route::get('/experience-edit/{id}',[ExperienceController::class,'edit'])->name('experience.edit');
Route::put('/experience-edit',[ExperienceController::class,'update'])->name('experience.update');
Route::post('/experience-destroy/{id}',[ExperienceController::class,'destroy'])->name('experience.destroy');

Route::get('/service-create',[ServiceController::class,'create'])->name('service.create');
Route::post('/service-create',[ServiceController::class,'store'])->name('service.store');
Route::get('/service-index',[ServiceController::class,'index'])->name('service.index');
Route::get('/service-edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
Route::put('/service-edit',[ServiceController::class,'update'])->name('service.update');
Route::post('/service-destroy/{id}',[ServiceController::class,'destroy'])->name('service.destroy');

Route::get('/project-create',[ProjectController::class,'create'])->name('project.create');
Route::post('/project-create',[ProjectController::class,'store'])->name('project.store');
Route::get('/project-index',[ProjectController::class,'index'])->name('project.index');
Route::get('/project-edit/{id}',[ProjectController::class,'edit'])->name('project.edit');
Route::put('/project-edit',[ProjectController::class,'update'])->name('project.update');
Route::post('/project-destroy/{id}',[ProjectController::class,'destroy'])->name('project.destroy');
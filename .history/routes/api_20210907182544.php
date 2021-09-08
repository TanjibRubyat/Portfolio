<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\HomeApiController;
use App\Http\Controllers\api\PortfolioApiController;
use App\Http\Controllers\api\ContactApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/name', [HomeApiController::class,'index']);

Route::get('/skill',[HomeApiController::class,'skill']);

Route::get('/experience',[HomeApiController::class,'experience']);

Route::get('/education',[HomeApiController::class,'education']);

Route::get('/service',[HomeApiController::class,'service']);

Route::get('/portfolio-skill',[PortfolioApiController::class,'portfolio']);

Route::get('/projects-by-portfolio-id/{portfolioId}',[PortfolioApiController::class,'getProjectsByPortfolioId']);

Route::get('/contact', [ContactApiController::class,'index']);

Route::post('/contact', [ContactApiController::class,'message']);
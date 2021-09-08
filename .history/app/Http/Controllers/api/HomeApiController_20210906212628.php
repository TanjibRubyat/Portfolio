<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeApiController extends Controller
{
    public function index()
    {
        try{
            return response()->json([
                'success' => true,
                'data' => new HomeController::all(),
                'message' =>'',
                'errors' => []
            ]);
        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' =>'Please try again!',
                'errors' => []
            ]);
    }
    }
}

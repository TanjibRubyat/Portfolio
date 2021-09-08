<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeApiController extends Controller
{
    public function index()
    {
        try{
            return response()->json([
                'success' => true,
                'data' => HomeController::all(),
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

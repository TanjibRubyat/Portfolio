<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Skill;
use App\Models\Experience;

class HomeApiController extends Controller
{
    public function index()
    {
        try{
            return response()->json([
                'success' => true,
                'data' => Home::all(),
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

    public function skill(){
        try{
            return response()->json([
                'success' => true,
                'data'=> Skill::all(),
                'message' => '',
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

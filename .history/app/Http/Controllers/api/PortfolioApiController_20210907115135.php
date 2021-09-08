<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioApiController extends Controller
{
    public function portfolio(){
        try{
        return response()->json([
            'success'=>true,
            'data'=>Portfolio::all(),
            'message'=>'',
            'errors'=>[]
        ]);
    }catch(\Exception $e){
        return response()->json([
                'success' => false,
                'message' => 'Please try again',
                'errors' => [] 
        ]);
        
    }
    }

}

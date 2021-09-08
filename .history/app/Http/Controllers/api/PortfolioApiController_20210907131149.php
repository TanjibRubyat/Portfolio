<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Project;

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

    public function getProjectsByPortfolioId($portfolioId){
        $projects = Project::where('portfolio_id', $portfolioId)->get();

    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactApiController extends Controller
{
    public function message(Request $request){
        try{
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ]);
        }catch(\Exception $e){

        }
    }
}

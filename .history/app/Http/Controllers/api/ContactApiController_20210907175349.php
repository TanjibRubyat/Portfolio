<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactApiController extends Controller
{
    public function message(Request $request){
        try{
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ]);
            return redirect()->back()->with('success','Sent');
        }catch(\Exception $e){
            return redirect()->back()->with('errors','Sending failed');
        }
    }
}

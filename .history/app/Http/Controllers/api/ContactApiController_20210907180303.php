<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactApiController extends Controller
{
    public function message(Request $request)
    {

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        return response()->json([
            'success' => true,
            'data' => $contact,
            'message' => 'Sent successfully',
            'errors' => []
        ]);
    }
}

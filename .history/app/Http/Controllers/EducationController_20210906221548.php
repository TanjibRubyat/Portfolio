<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Home;
use Illuminate\Support\Facades\Log;

class EducationController extends Controller
{
    public function index()
    {
        $education = Education::all();
        return view('admin.education.index',compact('education'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $home = Home::all();
        $education = Education::all();
        return view('admin.education.create',compact('home','education'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestuest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'institution' => 'required|max:255',
            'certificate'=>'required',
            'passing_year'=>'required',
            'home_id' => 'required',
        ]);     
    
        try{ 
            
             Home::create([
            'institution' => $request->institution,
            'certificate' => $request->certificate,
            'passing_year' => $request->passing_year,
            'home_id' => $request->home_id,
            ]);
            return redirect()->back()->with('success',"Upload successful");
        }catch(\Exception $e)
        {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong. please try again.');
        }
        
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Education::find($id);
        return view('admin.education.edit',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestuest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        try{

            $education = Home::find($id);
            $education->institution = $request->institution;
            $education->certificate = $request->certificate;
            $education->passing_year = $request->passing_year;
            $education->home_id = $request->home_id;
            $education->update();
            return redirect()->back()->with('success','Updated successfully');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();
        return redirect()->back()->with('success','Deleted successfully');
    }
}


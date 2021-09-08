<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        $home = Education::all();
        return view('admin.home.index',compact('home'));
        
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
        return view('admin.home.create',compact('home','education'));
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
            'name' => 'required|max:255',
            'logo'=>'required',
            'intro'=>'required',
            'speciality' => 'required',
        ]);     
    
        try{ 
            
             Home::create([
            'name' => $request->name,
            'logo' => $request->logo,
            'intro' => $request->intro,
            'speciality' => $request->speciality,
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
        $home = Home::find($id);
        return view('admin.home.edit',compact('home'));
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

            $home = Home::find($id);
            $home->name = $request->name;
            $home->logo = $request->logo;
            $home->intro = $request->intro;
            $home->speciality = $request->speciality;
            $home->update();
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
        $home = Home::find($id);
        $home->delete();
        return redirect()->back()->with('success','Deleted successfully');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Portfolio;
use App\Models\Home;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio-skills.index',compact('portfolios'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfolios = Portfolio::all();
        $homes = Home::all();
        return view('admin.portfolio-skills.create',compact('portfolios','homes'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'skill' => 'required|max:255',
        ]);     
    
        try{ 
            
            $imageName = null;
            if($request->hasFile('image'))
            {
                $images = $request->file('image');
                $imageName = time().'.'.$images->extension();
                $path = $request->file('image')->storeAs(
                    'public/images', $imageName
                ); 
            }
            
             Project::create([
            'name' => $request->services,
            'description' => $request->description,
            'home_id' => $request->home_id,
            'portfolio_id' => $request->portfolio_id,
            'images' => $imageName,
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
        $projects = Project::find($id);
        $home = Home::all();        
        return view('admin.portfolio-skills.edit',compact('projects','home'));
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

            $imageName = null;
            if($request->hasFile('image'))
            {
                $images = $request->file('image');
                $imageName = time().'.'.$images->extension();
                $path = $request->file('image')->storeAs(
                    'public/images', $imageName
                ); 
            }

            $projects = Project::find($id);
            $projects->name = $request->services;
            $projects->description = $request->description;
            $projects->home_id = $request->home_id;
            $projects->portfolio_id = $request->portfolio_id;
            if($imageName !== null){
                Storage::delete('public/images/'.$projects->image);

                $projects->image  = $imageName;
            }
            $projects->update();
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
        $projects = Project::find($id);
        $projects->delete();
        return redirect()->back()->with('success','Deleted successfully');
    }
}

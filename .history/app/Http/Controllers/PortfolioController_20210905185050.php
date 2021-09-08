<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Portfolio;
use App\Models\Home;
use Illuminate\Support\Facades\Log;

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
            
           Portfolio::create([
            'skill' => $request->skill,
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
        $portfolios = Portfolio::find($id);
        $home = Home::all();        
        return view('admin.portfolio-skills.edit',compact('portfolios','home'));
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

            $portfolios = Portfolio::find($id);
            $portfolios->skill = $request->skill;
            $portfolios->home_id = $request->home_id;
           
            $portfolios->update();
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
        $portfolios = Portfolio::find($id);
        $portfolios->delete();
        return redirect()->back()->with('success','Deleted successfully');
    }
}

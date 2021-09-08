<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Log;

class SkillController extends Controller
{
    public function index()
    {
        $skill = Skill::all();
        return view('admin.skills.index',compact('skill'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skill = Skill::all();
        return view('admin.skills.create')->with('skill',$skill);
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
            'skill' => 'required|max:255',
            'progress'=>'required',
            'home_id'=>'required',
        ]);     
    
        try{ 
            
             Skill::create([
            'skill' => $request->skill,
            'progress' => $request->progress,
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
        $skill = Skill::find($id);
        return view('admin.home.edit',compact('skill'));
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

            $skill = Skill::find($id);
            $skill->name = $request->skill;
            $skill->progress = $request->progress;
            $skill->home_id = $request->home_id;
            $skill->update();
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
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->back()->with('success','Deleted successfully');
    }
}

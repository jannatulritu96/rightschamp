<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
//use Illuminame\Foundation\Validation\ValidatesRequests;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Team Information';
        $teams= new Team();
        $render=[];
        $teams= $teams->paginate(10);
        $teams= $teams->appends($render);
        $data['teams'] = $teams;
        return view('admin.team.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create Team member form';
        return view('admin.team.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'details'=>'required',
            'image'=>'mimes:png,jpg,jpeg'
        ]);
        $team = new Team();
        $team->name= $request->name;
        $slugName = str_slug($request->name);
        $team->slug_name =  $slugName;
        $team->title= $request->title;
        $team->details= $request->details;

        if($request->hasFile('image'))
        {

            $image= $request->file('image');
            $image->move('assets/img/',$image->getClientOriginalName());
            $team->image = 'assets/img/'.$image->getClientOriginalName();
            $team->save();
        }
        $team->save();
        session()->flash('success','Information stored successfully');
        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Edit form';
        $data['team'] = Team::findOrFail($id);
        return view('admin.team.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'details'=>'required',
            'image'=>'mimes:png,jpg,jpeg'
        ]);
        $team = Team::findOrfail($id);
        $team->name= $request->name;
        $slugName = str_slug($request->name);
        $team->slug_name =  $slugName;
        $team->title= $request->title;
        $team->details= $request->details;

        if($request->hasFile('image'))
        {

            $image= $request->file('image');
            $image->move('assets/img/',$image->getClientOriginalName());
            $team->image = 'assets/img/'.$image->getClientOriginalName();
            $team->save();
        }
        $team->save();
        session()->flash('success','Information stored successfully');
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::findOrFail($id)->delete();
        session()->flash('success','Team deleted successfully');
        return redirect()->route('team.index');
    }
}

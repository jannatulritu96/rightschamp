<?php

namespace App\Http\Controllers;
use App\Practice_area;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Practice areas';
        $practice_areas= new Practice_area();
        $render=[];
        $practice_areas= $practice_areas->paginate(10);
        $practice_areas= $practice_areas->appends($render);
        $data['practice_areas'] = $practice_areas;
        return view('admin.practice_area.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create practice area form';
        return view('admin.practice_area.create',$data);
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
            'title'=>'required',
            'description'=>'required',
            'image'=>'mimes:png,jpg,jpeg'
        ]);
        $practice_area = new Practice_area();
        $practice_area->title= $request->title;
        $practice_area->description= $request->description;

        if($request->hasFile('image'))
        {

            $image= $request->file('image');
            $image->move('assets/img/',$image->getClientOriginalName());
            $practice_area->image = 'assets/img/'.$image->getClientOriginalName();
            $practice_area->save();
        }
        $practice_area->save();
        session()->flash('success','Information stored successfully');
        return redirect()->route('practice.index');
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
        $data['title'] = 'Edit about form';
        $data['practice_area'] = Practice_area::findOrFail($id);
        return view('admin.practice_area.edit',$data);
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
            'title'=>'required',
            'description'=>'required',
            'image'=>'mimes:png,jpg,jpeg'
        ]);

        $practice_area = Practice_area::findOrfail($id);
        $practice_area->title= $request->title;
        $practice_area->description= $request->description;

        if($request->hasFile('image'))
        {

            $image= $request->file('image');
            $image->move('assets/img/',$image->getClientOriginalName());
            $practice_area->image = 'assets/img/'.$image->getClientOriginalName();
            $practice_area->save();
        }
        $practice_area->save();
        session()->flash('success','Information stored successfully');
        return redirect()->route('practice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Practice_area::findOrFail($id)->delete();
        session()->flash('success','Practice deleted successfully');
        return redirect()->route('practice.index');
    }
}

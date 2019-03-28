<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'About us';
        $abouts= new About();
        $render=[];
        $abouts= $abouts->paginate(10);
        $abouts= $abouts->appends($render);
        $data['abouts'] = $abouts;
        return view('admin.about.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create about us form';
        return view('admin.about.create',$data);
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
            'short_description'=>'required',
            'description'=>'required',
            'image'=>'mimes:png,jpg,jpeg'
        ]);
        $about = new About();
        $about->title= $request->title;
        $about->short_description= $request->short_description;
        $about->description= $request->description;

        if($request->hasFile('image'))
        {

            $image= $request->file('image');
            $image->move('assets/img/',$image->getClientOriginalName());
            $about->image = 'assets/img/'.$image->getClientOriginalName();
            $about->save();
        }
        $about->save();
        session()->flash('success','Information stored successfully');
        return redirect()->route('about.index');
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
        $data['about'] = About::findOrFail($id);
        return view('admin.about.edit',$data);
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
            'short_description'=>'required',
            'description'=>'required',
            'image'=>'mimes:png,jpg,jpeg'
        ]);
        $about = About::findOrfail($id);
        $about->title= $request->title;
        $about->short_description= $request->short_description;
        $about->description= $request->description;

        if($request->hasFile('image'))
        {

            $image= $request->file('image');
            $image->move('assets/img/',$image->getClientOriginalName());
            $about->image = 'assets/img/'.$image->getClientOriginalName();
            $about->save();
        }
        $about->save();
        session()->flash('success','Information updated successfully');
//        return view ('admin.about.index');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::findOrFail($id)->delete();
        session()->flash('success','Slider deleted successfully');
        return redirect()->route('about.index');
    }
}

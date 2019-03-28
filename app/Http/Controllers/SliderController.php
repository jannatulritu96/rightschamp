<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Slider Information';
        $sliders= new Slider();
        $render=[];
        $sliders= $sliders->paginate(10);
        $sliders= $sliders->appends($render);
        $data['sliders'] = $sliders;
        return view('admin.slider.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create sliders form';
        return view('admin.slider.create',$data);
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
            'image'=>'mimes:png,jpg,jpeg'
        ]);
        $slider = new Slider();
        if($request->hasFile('image'))
        {

            $image= $request->file('image');
            $image->move('/assets/img/',$image->getClientOriginalName());
            $slider->image = '/assets/img/'.$image->getClientOriginalName();
            $slider->save();
        }
        $slider->save();
        session()->flash('success','Information stored successfully');
        return redirect()->route('slider.index');
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
        $data['slider'] = Slider::findOrFail($id);
        return view('admin.slider.edit',$data);
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
            'image'=>'mimes:png,jpg,jpeg'
        ]);
        $slider = Slider::findOrfail($id);
        if($request->hasFile('image'))
        {

            $image= $request->file('image');
            $image->move('/assets/img/',$image->getClientOriginalName());
            $slider->image = '/assets/img/'.$image->getClientOriginalName();
            $slider->save();
        }
        $slider->save();
        session()->flash('success','Information stored successfully');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::findOrFail($id)->delete();
        session()->flash('success','Slider deleted successfully');
        return redirect()->route('slider.index');
    }
}

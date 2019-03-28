<?php

namespace App\Http\Controllers;

use App\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Membership Information';
        $memberships= new Membership();
        $render=[];
        $memberships= $memberships->paginate(10);
        $memberships= $memberships->appends($render);
        $data['memberships'] = $memberships;
        return view('admin.membership.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create Team member form';
        return view('admin.membership.create',$data);
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
        $membership = new Membership();
        if($request->hasFile('image'))
        {

            $image= $request->file('image');
            $image->move('assets/img/',$image->getClientOriginalName());
            $membership->image = 'assets/img/'.$image->getClientOriginalName();
            $membership->save();
        }
        $membership->save();
        session()->flash('success','Information stored successfully');
        return redirect()->route('member.index');
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
        $data['membership'] = Membership::findOrFail($id);
        return view('admin.membership.edit',$data);
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
        $membership = Membership::findOrfail($id);
        if($request->hasFile('image'))
        {

            $image= $request->file('image');
            $image->move('assets/img/',$image->getClientOriginalName());
            $membership->image = 'assets/img/'.$image->getClientOriginalName();
            $membership->save();
        }
        $membership->save();
        session()->flash('success','Information stored successfully');
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Membership::findOrFail($id)->delete();
        session()->flash('success','Member deleted successfully');
        return redirect()->route('member.index');
    }
}

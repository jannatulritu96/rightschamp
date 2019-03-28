<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use Validator;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $users= new User();
        $data['title'] = "User List";
        $render=[];
        $users= $users->paginate(10);
        $users= $users->appends($render);
        $data['users'] = $users;
        return view('admin.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create User';
        return view('admin.user.create',$data);
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
            'phone_no'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:6',
            'image'=>'mimes:png,jpg,jpeg'
        ]);
        $user = new User();
        $user->name= $request->name;
        $user->name = $request->name;
        $slugName = str_slug($request->name);
        $user->slug_name =  $slugName;
        $user->phone_no= $request->phone_no;
        $user->address= $request->address;
        $user->email= $request->email;
        $user->password= bcrypt($request->password);

        if($request->hasFile('image'))
        {
            $image= $request->file('image');
            if($image->getClientOriginalExtension()=='png') {
                $image->move('user_images/', $user->id . '.' . $image->getClientOriginalExtension());
            }
        }
        $user->save();
        session()->flash('success','User stored successfully');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->user()->type=='Admin'){
            $data['title'] = 'User Profile';
            $data['user']= User::where('id',$id)->first();
//        dd($data);
            return view( 'admin.user.show',$data);
        }elseif(auth()->id()==$id){
            $data['title'] = 'User Profile';
            $data['user']= User::where('id',$id)->first();
            //        dd($data);
            return view( 'admin.user.show',$data);
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = User::findOrFail($id);
        return view('admin.user.edit',$data);
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
     // dd($request->all());
        $request->validate([
            'name'=>'required',
            'phone_no'=>'required',
            'email'=>'required|unique:users,email,' . $id,
            'password'=>'required|min:6',
            'image'=>'mimes:png,jpg,jpeg'
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $slugName = str_slug($request->name);
        $user->slug_name =  $slugName;
        $user->phone_no= $request->phone_no;
        $user->email= $request->email;
        $user->address= $request->address;
        $user->password= bcrypt($request->password);

        if($request->hasFile('image'))
        {

            $image= $request->file('image');
            $image->move('assets/img/',$image->getClientOriginalName());
            $user->image = 'assets/img/'.$image->getClientOriginalName();
            $user->save();
        }
        $user->save();
        session()->flash('success','User updated successfully');
//        return view('admin.user.index');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        User::findOrFail($id)->delete();
        session()->flash('success','User deleted successfully');
        return redirect()->route('user.index');
    }
}

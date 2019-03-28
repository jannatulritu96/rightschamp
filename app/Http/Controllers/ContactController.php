<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request){
        $data['title']= "Contact";
        $contacts= new Contact();
        $render=[];
        $contacts= $contacts->paginate(10);
        $contacts= $contacts->appends($render);
        $data['contacts'] = $contacts;
        return view('admin.contactInformation.index',$data);
    }
    public function contact_settings()
    {
        $data['title'] = "Edit Contact";
        $data['contact_settings']= Contact::first();
        // dd($data);
        return view('admin.contactInformation.contact_info', $data);
    }

    public function update_contact_settings(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'fax' => 'required',
            'email' => 'required'
        ]);
        $contact = new Contact();
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->fax = $request->fax;
        $contact->email = $request->email;
        $contact->save();

        session()->flash('success', 'Contact updated');
        return redirect()->route('contact.index');
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Contact';
        $data['contact'] = Contact::findOrFail($id);
        return view('admin.contactInformation.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'fax' => 'required',
            'email'=>'required|unique:contacts'
        ]);
        $contact = Contact::findOrfail($id);
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->fax = $request->fax;
        $contact->email = $request->email;
        $contact->save();

        session()->flash('success','User updated successfully');
//        return view('admin.contactInformation.index');
        return redirect()->route('contact.index');
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        session()->flash('success','Slider deleted successfully');
        return redirect()->route('contact.index');

    }
}

<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request){
//      dd($request->all());
    $request->validate([
        'user_name' => 'required',
        'user_email' => 'required|unique:questions',
        'subject' => 'required',
        'text' => 'required'
    ]);
    $question = New Question();

    $question->user_name = $request->user_name;
    $question->user_email = $request->user_email;
    $question->subject = $request->subject;
    $question->text = $request->text;
    $question->save();
    session()->flash('success','Your Question Sent Successfully , We Contact You Later');
    return redirect()->back();
//        return view('frontend.contact');

    }
    public function contacts(Request $request){
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required|unique:questions',
            'text' => 'required'
        ]);
        $question = New Question();
    
        $question->user_name = $request->user_name;
        $question->user_email = $request->user_email;
        $question->text = $request->text;
        $question->save();
        session()->flash('success','Your Question Sent Successfully , We Contact You Later');
        return redirect()->back();
    }

}

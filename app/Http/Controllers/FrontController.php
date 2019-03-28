<?php

namespace App\Http\Controllers;

use App\Slider;
use App\About;
use App\Practice_area;
use App\Membership;
use App\Team;
use App\Contact;
use Illuminate\Http\Request;

class FrontController extends Controller
{
        public function index(){
            $data['sliders'] = Slider::get();
            $data['abouts'] = About::get();
            $data['practice_areas'] = Practice_area::get();
            $data['memberships'] = Membership::get();
            $data['teams'] = Team::get();
            $data['contacts'] = Contact::get();

            return view('frontend.home',$data);
        }
    public function about(){
        $data['abouts'] = About::get();
        $data['contacts'] = Contact::get();

        return view('frontend.about',$data);
    }
    public function service($id){
        $data['practice_areas'] = Practice_area::where('id',$id)->get();
        $data['contacts'] = Contact::get();

        return view('frontend.service-details',$data);
    }
    public function team($slug_name){
        $data['teams'] = Team::where('slug_name',$slug_name)->get();
        $data['contacts'] = Contact::get();

        return view('frontend.team',$data);
    }
    public function contact(){
        $data['contacts'] = Contact::all();
        return view('frontend.contact',$data);
    }
}

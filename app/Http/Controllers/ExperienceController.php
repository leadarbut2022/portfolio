<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\Contact;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();

        return view('experience',compact('experiences'));
    }


    public function about()
    {
        $AboutMe = AboutMe::all();

        return view('aboutMe',compact('AboutMe'));
    }
    public function contact()
    {
        $experiences = Contact::all();

        return view('contact',compact('experiences'));
    }



    
}

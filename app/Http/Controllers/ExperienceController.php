<?php

namespace App\Http\Controllers;

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
        $experiences = Experience::all();

        return view('aboutMe',compact('experiences'));
    }
    public function contact()
    {
        $experiences = Experience::all();

        return view('contact',compact('experiences'));
    }



    
}

<?php

namespace App\Http\Controllers;

use App\Models\Pro;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $pros =Pro::all();
        return view('projects',compact('pros'));
    }
}

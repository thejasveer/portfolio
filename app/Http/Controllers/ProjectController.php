<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function     sortingVisualizer(){
        return view('Projects.Sorting-Visualizer');
    }
}

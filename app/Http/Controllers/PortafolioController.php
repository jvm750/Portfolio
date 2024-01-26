<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Technology;
use App\Models\Course;
use App\Models\Area;
use Illuminate\Http\Request;


class PortafolioController extends Controller
{
    //
    public function index()
    {
        $proyectos = Proyecto::paginate();
        return view('welcome',compact('proyectos'));
        $technologies = Technology::paginate();
        return view('welcome',compact('technologies'));
        $courses = Course::paginate();
        return view('welcome',compact('courses'));
        $areas = Area::paginate();
        return view('welcome',compact('areas'));
    }
    //
}

<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Technology;
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
    }
    //
}

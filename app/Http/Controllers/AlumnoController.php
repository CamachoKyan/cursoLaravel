<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function alumnos(){
        return view('alumno');
    }



public function inicio(){
    return view('inicio');
}
}
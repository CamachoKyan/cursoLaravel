<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bienvenidoController extends Controller
{
    public function bienvenido(){
        $nombre = "Kyan";

        $alumnos = ['Skibidi','Garten Of','Toilet','Ban Ban'];

        $datos = array(['nombre' => 'Skibidi', 'edad'=>17, 'turno' => 'Vespertino'],
                       ['nombre' => 'Garten Of', 'edad'=>16, 'turno' => 'Matutino'],
                       ['nombre' => 'Toilet', 'edad'=>15, 'turno' => 'Vespertino'],
                       ['nombre' => 'Ban Ban', 'edad'=>14, 'turno' => 'Matutino']);

        return view('bienvenido', compact('nombre', 'alumnos', 'datos'));
        
    }

    
}

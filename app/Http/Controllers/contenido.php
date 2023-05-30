<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contenido extends Controller
{
    public function listarAcerca(){
        return view('acerca');

    }

    public function listarTematicas(){
        return view('tematicas');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lugares extends Controller
{
    public function listarUniversidades(){
        return view('universidades');

    }

    public function listarTurismo(){
        return view('turismo');

    }
}

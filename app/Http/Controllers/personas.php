<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personas extends Controller
{
    public function listarRegistro(){
        return view('registro');

    }


    public function listarConferencistas(){
        return view('conferencistas');

    }
}

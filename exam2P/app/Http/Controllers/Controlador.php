<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    //


    public function guardar(Request $req){


        $validated = $req ->validate([
            'txtNombre' => 'required|min:5',
            'txtFecha' => 'required',
            'txtVideoJ' => 'required|numeric|digits_between:1,7'
        ]);

        return redirect('/')->with('confirmacion','mensaje');
    }
}

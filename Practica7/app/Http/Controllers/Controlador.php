<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormLibros;

class Controlador extends Controller

{
    //
    public function metodoInicio() {
        return view('welcome');
    }

    public function metodoRegistrarLibro() {
        return view('registrarlibro');
    }

    public function guardarLibro(validadorFormLibros $req){
        return redirect('/registrarlibro')->with('mensaje', 'Libro registrado exitosamente');
    }

}

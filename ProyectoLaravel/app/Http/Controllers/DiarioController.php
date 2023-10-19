<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiarioController extends Controller //Clase que hereda todo lo que necesita de Controller
{
    //
    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
    }

    public function metodoRecuerdos(){
        return view('recuerdos');
    }

    public function guardarRecuerdo(Request $req){
        //return $req->all();
        //Codigo php para imprimir en pantalla
        echo "<p>";
        echo $req->ip();
        echo " - ";
        echo $req->path(); //Ruta
        echo " - ";
        echo $req->method();  
        echo " - ";
        echo $req->input('txtTitulo'); 
        "</p>";
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/registrar',[Controlador::class,'guardar']);


//Ruta de tipo request
// Route::post('/ruta',[Controllador::class,'metodo'])

//guardar los valores antiguos del formulario: {{old('input')}}

//para el error en el formulario: {{$errors->first('input')}}

//regresar un mensaje en un request:
// return redirect('/ruta')->with('nombremensaje','mensaje');


//En el formulario debajo del metodo va la variable @csrf
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


Route::controller(Controlador::class)->group(function () {
    Route::get('/', 'metodoInicio')->name('inicio');
    Route::get('/registrarlibro', 'metodoRegistrarLibro')->name('registrarlibro');
});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/registrarlibro', function () {
//     return view('registrarlibro');
// });

Route::post('/guardarLibro', [Controlador::class, 'guardarLibro']);
    
<?php

use Illuminate\Support\Facades\Route;

#Ruta para Index

Route::view('/', 'welcome')->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });

#Ruta para formulario

Route::view('/form', 'formulario')->name('form');
// Route::get('/form', function () {
//     return view('formulario');
// });

#Ruta para recuerdos

Route::view('/memories', 'recuerdos')->name('memories');
// Route::get('/memories', function () {
//     return view('recuerdos');
// });

Route::view('/vista1', 'vista1');

Route::get('v1', function (){
    return view('vista1');
});         
    




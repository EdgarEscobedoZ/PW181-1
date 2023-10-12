@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<h1 class="display-1 text-center text-success mt-4">Home</h1>

@component('components.card')
@endcomponent 

<x-card />

<x-mensaje mensaje="Este es el welcome" fecha="11/10/23" />

@endsection





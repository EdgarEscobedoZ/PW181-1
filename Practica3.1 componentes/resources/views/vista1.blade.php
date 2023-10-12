@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<h1 class="display-1 text-center text-success mt-4">Vista 1</h1>
<div class="text-center">
    @component('components.card')
    @endcomponent
</div>

<x-mensaje mensaje="Este es la vista 1" fecha="11/10/23" />


@endsection
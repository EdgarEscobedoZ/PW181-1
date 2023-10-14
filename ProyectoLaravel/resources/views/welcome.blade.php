@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<h1 class="display-1 text-center text-success mt-4">Home</h1>

@component('components.button', ['text' => 'Primary Button', 'color' => 'btn-primary', 'size' => 'btn-lg'])
@endcomponent

@component('components.button', ['text' => 'Success Button', 'color' => 'btn-success', 'size' => 'btn-md'])
@endcomponent

@endsection




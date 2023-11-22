@extends('layouts.plantilla')

@section('titulo', 'Memorias')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-4">Memorias</h1>

<div class="container mt-5 col-md-6">


    @foreach ($consR as $item)
        <div class="card ">          
            <div class="card-body">
                <div>
                    <h4 class="card-title fw-semibold">{{$item->titulo}} </h1>
                    <h5 class="card-title fw-semibold">{{$item->fecha}}</h5>
                    <p class="card-title fw-lighter">{{$item->recuerdo}}</p>
                </div>              
            </div>
          
            <div class="card-footer text-body-secondary" style="text-align: right">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar">
                    Editar <i class="bi bi-pencil-square"></i>
                </button>
                <a href="" class="btn btn-danger">Borrar <i class="bi bi-trash"></i></a>          
            </div>
          
        </div>
        <br>
    @endforeach
      
</div>

@endsection

@include('partials.modal')

@extends('layouts.plantilla')

@section('titulo', 'Productos')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-4">Productos</h1>
<div class="container text center">
    <div class="row">
        <div class="col"></div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Ingrese el producto" aria-label="Productos" aria-describedby="basic-addon1">
                        
                        {{-- <span class="input-group-text" id="basic-addon1">Buscar</span> --}}

                        <button class="btn btn-info">Buscar</button>
                      </div>
                        
                        @include('partials.card')
                  
                </div>
            </div>            
        </div>

        <div class="col"></div>
    </div>

</div>



@endsection
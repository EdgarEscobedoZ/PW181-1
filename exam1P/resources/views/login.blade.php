@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<h1 class="display-1 text-center text-info mt-4">Login</h1>
<div class="container text center">
    <div class="row">
        <div class="col"></div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="input-group mb-3">
                            <label for="">Usuario</label>
                            <input type="text" class="form-control" placeholder="Ingrese su usuario" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                          
                        <div class="input-group mb-3">
                            <label for="">Contraseña:</label>
                            <input type="password" class="form-control" placeholder="Ingrese su contraseña" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            
                        </div>
                        
                        <div class="mb-3 text-center">
                            <button class="btn btn-primary">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>            
        </div>

        <div class="col"></div>
    </div>

</div>



@endsection
@extends('layouts.plantilla')

@section('title', 'Home')

@section('contenido')

@if (session()->has('confirmacion'))
    <script>
        Swal.fire("Registro Guardado");
    </script>
@endif






<h1 class="text-success">VideoJuegos</h1>

<div class="mt-5">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        @if ($errors -> any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors -> all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <div class="card">
            <form action="/registrar" method="POST">

                @csrf
                <div>
                    <label for="txtNombre">Nombre</label>
                    <input type="text" name="txtNombre" id="nombre" class="form-control" value="{{old('txtNombre')}}">
                    {{-- {{$errors->first('txtNombre')}} --}}
                </div>

                <div>
                    <label for="txtFecha">Fecha Publicación:</label>
                    <input type="date" name="txtFecha" id="apellido" class="form-control" value="{{old('txtFecha')}}">
                    {{-- {{$errors->first('txtFecha')}} --}}
                </div>

                <div>
                    <label for="txtVideoJ">Videojuegos Vendidos</label>
                    <input type="text" name="txtVideoJ" id="email" class="form-control" value="{{old('txtVideoJ')}}">
                    {{-- {{$errors->first('txtVideoJ')}} --}}
                </div>

                <button type="submit" class="btn btn-success">Registrar</button>
            </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>


@endsection

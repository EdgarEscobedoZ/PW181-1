@extends('layouts.plantilla')

@section('titulo', 'Registro')

@section('contenido')

@if (session()->has('mensaje'))
<script>
   Swal.fire({
    icon: 'success',
    title: 'El libro se registró correctamente',
    showConfirmButton: false,
    timer: 1500
})
</script>
@endif

<div class="container mt-5 col-md-8">
    <div class="card text-bg-dark">

        <div class="card-header fs-1 fw-medium text-center text-success">
            Registro de Libro
        </div>
        

        <div class="card-body text">
            <form method="POST" action="/guardarLibro">

            @csrf     
                
                <div class="mb-3">
                    <label class="form-label">ISBN: </label>
                    <input type="text" name="txtISBN" class="form-control" value="{{ old('txtISBN')}}" >

                    <p class="text-danger fw-bold">{{ $errors->first('txtISBN') }}</p>

                </div>
                <div class="mb-3">
                    <label class="form-label">Título del Libro: </label>
                    <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo')}}">

                    <p class="text-danger fw-bold">{{ $errors->first('txtTitulo') }}</p>

                </div>  
                <div class="mb-3">
                    <label class="form-label">Autor del Libro: </label>
                    <input type="text" name="txtAutor" class="form-control" value="{{ old('txtAutor')}}">

                    <p class="text-danger fw-bold">{{ $errors->first('txtAutor') }}</p>

                </div>
                <div class="mb-3">
                    <label class="form-label">Nº de páginas: </label>
                    <input type="text" name="txtPaginas" class="form-control" value="{{ old('txtPaginas')}}">

                    <p class="text-danger fw-bold">{{ $errors->first('txtPaginas') }}</p>

                </div>    
                <div class="mb-3">
                    <label class="form-label">Editorial: </label>
                    <input type="text" name="txtEditorial" class="form-control" value="{{ old('txtEditorial')}}">

                    <p class="text-danger fw-bold">{{ $errors->first('txtEditorial') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email de la editorial: </label>
                    <input type="text" name="txtEmail" class="form-control" value="{{ old('txtEmail')}}">

                    <p class="text-danger fw-bold">{{ $errors->first('txtEmail') }}</p>
                </div>        
        </div>
        <div class="card-footer text-body-secondary">
            <div style="text-align: center">
                <button type="submit" class="btn btn-outline-success">Registrar</button>
            </form>
            </div>
        </div>
    
    </div>
</div>



@endsection
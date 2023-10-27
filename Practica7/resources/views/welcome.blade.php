@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<h1 class="display-1 text-center mt-2 text-light">Librería virtual</h1>

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="hero-section mt-5">
  <div class="card-grid">
    <a class="card1" href="#">
      <div class="card__background" style="background-image: url(https://t2.uc.ltmcdn.com/es/posts/3/8/6/que_hacer_con_los_libros_viejos_51683_600_square.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Libros</p>
        <h3 class="card__heading">Todos nuestros libros</h3>
      </div>
    </a>
    <a class="card1" target="_blank" href="https://elpais.com/ciencia/2023-10-25/la-literatura-gotica-del-xix-influyo-en-la-ciencia-para-la-definicion-del-asesino-en-serie.html">
      <div class="card__background" style="background-image: url(https://imagenes.elpais.com/resizer/W2S8O6Cxmvia6lwtNgbPJ07XiTk=/1200x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/2C7Z5CRHBNHUVKCA7FKYNQLBOE.JPG)"></div>
      <div class="card__content">
        <p class="card__category">Noticias</p>
        <h3 class="text-light">La literatura gótica del XIX influyó en la ciencia para la definición del asesino en serie</h3>
        <p class="card__category">Leer noticia completa</p>
      </div>
    </a>
    <a class="card1" href="#">
      <div class="card__background" style="background-image: url(https://www.viaempresa.cat/uploads/s1/20/67/32/24/la-startup-librazo-ofereix-noves-formes-de-lectura.jpeg)"></div>
      <div class="card__content">
        <p class="card__category">Recomendados</p>
        <h3 class="card__heading">Nuevas formas de lectura</h3>
      </div>
    </li>
    <a class="card1" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557004396-66e4174d7bf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <p class="card__category">Recomendados</p>
        <h3 class="card__heading">Aprender Idiomas</h3>
      </div>
    </a>
  <div>
</section>

@endsection

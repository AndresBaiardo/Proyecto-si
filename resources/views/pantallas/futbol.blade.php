@extends('deportesP')
@section('fondo')
    <style>
        .header{
            background:url(/img/fondo-futbol.jpeg);
            background-size:cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: auto;
        }
    </style>
@endsection
@section('nombre-pantalla', 'Futbol')
@section('titulo-header', 'Futbol')
@section('titulo-brand', 'Se Parte de Nuestro Equipo')
@section('texto-brand', 'El Futbol es uno de los deportes mas populares, por esto mismo es uno de las diciplinas que mas desempeño exigen a los jugadores, por lo cual en nuestros curso enseñamos 
    a como practicar adecuadamente este deporte con ayuda de entrenadores expertos y con practicas usadas por profecioles.')
@section('img-banner')
    <img src="{{ asset('img/equipo-futbol.jpg') }}" class="img-fluid rounded-start" alt="...">
@endsection
@section('titulo-banner', 'Nuestro Equipo')
@section('texto-banner', 'Los alumnos que decidan inscribirse a esta diciplina obtendran asesoramineto de un profecional, tendran acceso libre a nuestras canchas, el unifome vendra incluido.
    se le otrogara horarios y se le inscribira en torneos.')
@section('img-card1')
    <img src="{{ asset('img/cancha-futbol.jpg') }}" class="card-img-top img" alt="...">
@endsection
@section('titulo-card1','Nuestras Instalaciones')
@section('texto-card1', 'Las canchas son las mejores, tenemos dos dispobles especialmente para futbol, las cuales se usan para partidos de practica')
@section('img-card2')
    <img src="{{ asset('img/instructores.jpg') }}" class="card-img-top img" alt="...">
@endsection
@section('titulo-card2', 'Entrenadores')
@section('texto-card2', 'Los entrenadores son profeciones para la enseñansa del deporte, en su histrial tienen una gran experiencia en futbol.')
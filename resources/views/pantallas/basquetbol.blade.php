@extends('deportesP')
@section('fondo')
    <style>
        .header{
            background:url(/img/fondo-basquetbol.jpeg);
            background-size:cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: auto;
        }
    </style>
@endsection
@section('nombre-pantalla', 'Basquetbol')
@section('titulo-header', 'Basquetbol')
@section('titulo-brand', '¿Qué es el baloncesto?')
@section('texto-brand', 'El baloncesto es un deporte en el cual compiten dos equipos de cinco jugadores cada uno. El objetivo es introducir la pelota en el aro del equipo contrario. El aro se encuentra ubicado a 3,05 metros de altura. Por eso, el baloncesto suele ser jugado por personas de gran estatura.')
@section('img-banner')
    <img src="{{ asset('img/basquetbol1.jpg') }}" class="img-fluid rounded-start" alt="...">
@endsection
@section('titulo-banner', 'Técnica y Estrategia')
@section('texto-banner', 'Domina la acción motriz de un movimiento ofensivo o defensivo que te lleva a ganar el mayor espacio en el menor tiempo, viviendo momentos llenos de básquetbol junto con el espíritu deportivo de tu equipo.')
@section('img-card1')
    <img src="{{ asset('img/basketbol-cancha.jpg') }}" class="card-img-top img" alt="...">
@endsection
@section('titulo-card1','Tecnología e Instalaciones')
@section('texto-card1', '
    Cuatro canchas de baloncesto con 24 cestas con capacidades de análisis de video durante las prácticas y los juegos.
    Instalación de césped sintético cubierto para acelerar y agilizar el trabajo con entrenadores, enfocado en los jugadores de baloncesto
')
@section('img-card2')
    <img src="{{ asset('img/basketbol-instructor.jpg') }}" class="card-img-top img" alt="...">
@endsection
@section('titulo-card2', 'Centro de Rendimiento y Ciencias del Deporte')
@section('texto-card2', 'Estudio de yoga 
Equipo de fuerza y acondicionamiento
Aulas para nutrición y entrenamiento en liderazgo
Instalaciones de entrenamiento deportivo para recuperación y regeneración, incluidas bañeras de agua caliente y agua fría')
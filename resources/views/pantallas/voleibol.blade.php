@extends('deportesP')
@section('fondo')
    <style>
        .header{
            background:url(/img/fondo-voleivol.jpeg);
            background-size:cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: auto;
        }
    </style>
@endsection
@section('nombre-pantalla', 'Voleibol')
@section('titulo-header', 'Voleibol')
@section('titulo-brand', 'Se Parte de Nuestro Equipo')
@section('texto-brand', 'El voleibol es un deporte que se juega con balón, consiste en dos equipos, constituidos por 6 jugadores cada uno, se enfrentan sobre un terreno de juego separado en dos campos por una red central. Te contamos todo lo que necesitas saber sobre el voleibol y como convertirte en entrenador de Voleibol.')
@section('img-banner')
    <img src="{{ asset('img/voleibol3.jpg') }}" class="img-fluid rounded-start" alt="...">
@endsection
@section('titulo-banner', '¿En qué consiste el Voleibol?')
@section('texto-banner', 'El juego tiene como objetivo hacer que el balón pase por encima de la red, consiguiendo que llegue al suelo del campo del equipo contrario, mientras que el equipo rival intenta impedir que esto suceda, buscando la jugada más complicada que haga  errar al equipo  contrario. Surge una fase de ataque en un equipo cuando este intenta  hacer que el balón toque el suelo en la pista rival,  mientras el equipo contrario sale a la red a bloquear el ataque.  ')
@section('img-card1')
    <img src="{{ asset('img/voleibol1.jpg') }}" class="card-img-top img" alt="...">
@endsection
@section('titulo-card1','Entrenador de voleibol')
@section('texto-card1', 'El entrenador de voleibol es un maestro y a la vez un educador especialmente cuando se trabaja con equipos infantiles y juveniles, el entrenador de voleibol debe aportar grandes conocimientos y, aunque es un especialista deportivo, también trabaja por la motivación y el esfuerzo tanto a nivel individual como a nivel colectivo para generar atmósferas estimulantes que premien la implicación. ')
@section('img-card2')
    <img src="{{ asset('img/voleibol2.png') }}" class="card-img-top img" alt="...">
@endsection
@section('titulo-card2', 'Curso entrenador voleibol')
@section('texto-card2', 'Dentro del sector de cursos de Entrenador de voleibol cuentas con un  un gran abanico de estudios además de salidas profesionales. En este apartado de Entrenador de voleibol podrás encontrar todos aquéllos cursos relacionados con la figura del entrenador. ')
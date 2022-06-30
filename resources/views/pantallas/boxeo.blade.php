@extends('deportesP')
@section('fondo')
    <style>
        .header{
            background:url(/img/fondo-boxeo.jpeg);
            background-size:cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: auto;
        }
    </style>
@endsection
@section('nombre-pantalla', 'Boxeo')
@section('titulo-header', 'Boxeo')
@section('titulo-brand', '¿Te gusta el boxeo y quieres empezar a practicarlo?')
@section('texto-brand', 'El boxeo se trata de un deporte de combate en el que dos adversarios luchan utilizando tan solo sus puños empleando los guantes reglamentarios, para golpear a su rival de cintura para arriba, en un área de combate cuadrangular diseñada para tal efecto y con unas medidas previamente establecidas. ')
@section('img-banner')
    <img src="{{ asset('img/boxeo1.jpg') }}" class="img-fluid rounded-start" alt="...">
@endsection
@section('titulo-banner', 'Cursos de Boxeo')
@section('texto-banner', 'Esta formación te enseñará todas las técnicas para que lo realices correctamente, desde el movimiento de cabeza, las posturas que tienes que adoptar, como las respiraciones en cada golpe y los tipos de golpe que puedes aplicar. Y es que, la mayoría de las técnicas se basan en una posición perfecta.')
@section('img-card1')
    <img src="{{ asset('img/boxeo2.jpg') }}" class="card-img-top img" alt="...">
@endsection
@section('titulo-card1','Caracteristica de un Boxeador')
@section('texto-card1', 'Durante los Cursos de Boxeo, te darás cuenta de que con los conocimientos teóricos y prácticos sobre este deporte no es suficiente. Y es que, para llegar a ser un experto boxeador o monitor de boxeo debemos tener en cuenta una serie de habilidades o características personales.')
@section('img-card2')
    <img src="{{ asset('img/boxeo3.jpg') }}" class="card-img-top img" alt="...">
@endsection
@section('titulo-card2', 'El boxing es uno de los más reconocidos deportes de contacto.')
@section('texto-card2', 'Este tipo de combate, consta de una serie de reglas establecidas por un árbitro, 5 jueces y un cronometrador, donde la realización de los diferentes golpes es importante en las diferentes distancias (corta, media, larga). En la actualidad, es un deporte de los que muchos se benefician y se inician en él, ya sea por defensa personal o la mayoría por hobbie. Es un deporte duro y requiere de mucha constancia y fuerza. ')
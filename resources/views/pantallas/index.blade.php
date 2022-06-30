@extends('nav')
@section('nav')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title></title>
</head>
    
    <header class="header">
        <div class="header-container">   
            <h2 class="text-center mx-auto">Cursos deportivos para todas las edades</h2>    
            
        </div>
    </header>
    <div class="brand" >
        <div class="container-fluid">
            <h5 class="brand-title card-title text-center fs-1">EASPORT</h5>
            <p class="text-break text-center fs-5">En EASport desarrolla toda su oferta formativa con la misma metodología que durante más de 60 años ha realizado el Grupo San Valero así como SEAS en sus más de 10 años de formación online.</p>
        </div>
    </div>
    
    <!-- cards -->
    <div class="card-group container-cards ">
        <div class="card" >
            <img src="{{ asset('img/instructores.jpg') }}" class="card-img-top img" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center fs-3">Nuestros Instructores</h5>
                <p class="card-text fs-6">Los cursos son instruidos por los mejores deportisatas del pais, con reconocimientos en distintos programas deportivos y copetencia profesionales.
                    Con la instrucion de estas personas podras desarrollar de una mejor manera y con tecnicas profeciones.
                </p>  
            </div>
        </div>
        <div class="card ">
            <img src="{{ asset('img/instalaciones.jpg')}}" class="card-img-top img" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center fs-3">Nuestras Instalaciones</h5>
                <p class="card-text fs-6 ">Contamos con las mejores instalciones deportivas del estado, contanmdo con 2 canchas de futbol, dos de voleibol, y 3 espacios al aire libre. 
                    Tambien tenermos todo el equipo necesario para cad deporte de la mas alta calidad.
                </p>       
            </div>
        </div>
    </div>
    <!-- banner -->
    <div class="banner">
        <div class="banner-container">
            <h5 class="card-title text-center fs-2">No Pierdas esta Gran Oportunidad</h5>
            <p class="text-break fs-5">Al inscribirte con nosotros obtines mas beneficios que en los lugares convencionaes, tienes la oportunidad de desempeñarte de manera mas profecional con nuestro equipo especializado y con nuestras instalaciiones profecionales</p>
            <div class="d-grid gap-1 col-2 mx-auto">
                <a class="btn btn-lg btn-blanco" href="#" role="button">¡Inscribete Ahora!</a>
            </div>  
        </div>
    </div>

    <!-- Carrusel -->
    <div class="card mb-3 mx-auto" style="width:80%;">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/basquetbol.jpg" class="d-block w-100" alt="Basquetbol">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Basquetbol</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/balonmano.jpg" class="d-block w-100" alt="Balonmano">
                <div class="carousel-caption d-none d-md-block">
                    <h5>balonmano</h5>
                
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/boxeo.jpg" class="d-block w-100" alt="Boxeo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Boxeo</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/boxeo2.jpg" class="d-block w-100" alt="Boxeo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Boxeo</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/voleibol.jpg" class="d-block w-100" alt="Voleibol">
                <div class="carousel-caption d-none d-md-block">
                    <h5>voleibol</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>


    <!-- location -->
    <div class="location">
        <div class="container-location">
            <h5 class="card-title text-center fs-1">Nuestras Instalaciones</h5>
            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8581.737105824714!2d-104.89356065164594!3d21.433046400051385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84273123eaaaf2b9%3A0x16adf6ada41de099!2sUniversidad%20Tecnol%C3%B3gica%20de%20Nayarit!5e0!3m2!1ses!2smx!4v1644470346426!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- <form class="d-flex">
        <input name="buscarpor" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{$buscarpor}}">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <ul>
        @foreach ($cursos as $curso)
                <li>{{$curso->nombre}}</li>
        @endforeach        
    </ul> -->
@endsection

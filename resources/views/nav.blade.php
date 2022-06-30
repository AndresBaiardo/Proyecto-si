<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <title></title>
</head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"> 
                <div class="nav-logo">
                    <img src="img/Logo-easport.svg" alt="Logo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/inscripciones">Inscripcion</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Deportes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/deportes">Todos</a></li>
                            <li><a class="dropdown-item" href="/boxeo">Boxeo</a></li>
                            <li><a class="dropdown-item" href="/futbol">Fútbol</a></li>
                            <li><a class="dropdown-item" href="/basquetbol">Basquetbol</a></li>
                            <li><a class="dropdown-item" href="/voleibol">Voleibol</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/sesion') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                
                            @endguest
                        </ul>
                    </li>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Buscar
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">

                            <li class="nav-item dropdown ">
                                <form class="d-flex">
                                    <input class="form-control me-2 "name="buscarpor"value="{{$buscarpor}}" value="" type="search" placeholder="Busca el Deporte" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                                <ul class="dropdown-menu list-group">
                                    @foreach ($cursos as $curso)
                                        <li><a class="dropdown-item" href="/{{ strtolower($curso->nombre)}}">{{$curso->nombre}}</a></li>lar
                                    @endforeach 
                                </ul>
                                
                                
                            </li>
                        </div>
                    </div>
                </div>
                </div>
                    
                </ul>
            </div>
        </div>
    </nav>  
    @yield('nav')
    <section>
        @yield('cursos')
    </section>

    <!-- footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <section class="">
            <div class="container text-center text-md-start mt-5">
            
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>EASport
                        </h6>
                        <p>
                            puedes elegir cursos online de las diferentes áreas que conforman nuestra oferta de formación:  Entrenamiento y Fitness y Nutrición Deportiva.
                        </p>
                    </div>
            
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Deportes</h6>  
                        <p> <a href="/boxeo" class="text-reset">Boxeo</a> </p>
                        <p> <a href="/futbol" class="text-reset">Futbol</a> </p>
                        <p><a href="/basquetbol" class="text-reset">Basquetbol</a> </p>
                        <p><a href="/voleibol" class="text-reset">Voleibol</a></p>
                    </div>
                    
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                        <p><i class="fas fa-home me-3"></i> Tepic, Nayarit</p>
                        <p><i class="fas fa-envelope me-3"></i>info@example.com </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>    
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>    
                    </div>
                </div>
            </div>
        </section>
        
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="/">EASport.com</a>
            <a class="text-reset" href="/mapasitio">/ Mapa del Sitio</a>
        </div>
    
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
   
</body>
</html>

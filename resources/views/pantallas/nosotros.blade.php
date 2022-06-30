@extends('nav')
@section('nav')
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/nosotros.css">
        
    </head>
    <body>
        <header class="header">
            <div class="header-container">   
                <h2 class="text-center mx-auto">Nosotros</h2>    
            </div>
        </header>
        <section>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
            </ol>
        </section>
        <div class="card mx-auto" style="width: 70%;">
            <div class="card-body">
                <h2>EAEPORT</h2>
                <p class="card-text text-break">No alegramos de encontrarnos contigo. Si has llegado hasta aquí es porque quizá ha llegado el momento de cambiar tu presente y empezar a construir el futuro. Si estás pensando en afrontar nuevos retos y es momento de cambio, que la propia palabra “cambio” no te asuste. Estudiar en nuestro centro, especializado en formación 
                    deportiva y hacerlo online, estamos seguros de que te va a permitir avanzar en tus objetivos profesionales. Vas a seguir disfrutando de tu día a día como hasta ahora: nos adaptaremos a ti para que puedas compaginar estudios con tu actividad diaria, al mismo tiempo que adquieres 
                    conocimientos mucho más profundos en deporte. Porque sabemos la formación continua es clave en este sector y que en ocasiones puede resultar difícil compaginar los horarios de la formación, el trabajo y la actividad familiar. 
                   <br><br> En EASPORT, puedes elegir cursos online de las diferentes áreas que conforman nuestra oferta de formación: Entrenamiento y Fitness y Nutrición Deportiva. </p>
            </div>
            <img src="{{ asset('img/instructor2.jpg')}}" class="card-img-top" alt="...">
        </div>
        
        <section class="mb-4 contacto">
            <div class="container-contacto">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contactanos</h2>
                <p class="text-center w-responsive  mb-5">Puedes contactarnos mediante nuestra pagina registrandote y de inmediato te atenderemos, o puedes contactarnos por medio de nuestro correo electronico o numero de telefono. </p>
                <div class="row">
                    <div class="text-center ">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>Tepic,Nayarit, CP 63100, Mexico</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>+ 55 311-127-8909</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>contact@Sport.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    
    
   
@endsection
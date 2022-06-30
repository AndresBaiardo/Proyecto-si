@extends('nav')
@section('nav')
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/deportesPlantilla.css">
        @yield('fondo')
    </head>
        
    <div class="header">
        <div class="header-container">   
            <h2 class="text-center mx-auto">@yield('titulo-header')</h2>    
        </div>
    </div>
    <ol class="breadcrumb"> 
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item "><a href="/deportes">Deportes</a></li>
        <li class="breadcrumb-item active" aria-current="page">@yield('nombre-pantalla')</li>
    </ol>   
    <div class="brand" >
        <div class="container-fluid">
            <h5 class="brand-title card-title text-center fs-1">@yield('titulo-brand')</h5>
            <p class="text-break text-center fs-5">@yield('texto-brand')</p>
        </div>
    </div>
    <div class="card mb-3 mx-auto banner" style="width:80%;">
        <div class="row g-0">
            <div class="col-md-4 img-banner">
                @yield('img-banner')
            </div>
            <div class="col-md-8">
                <div class="card-body text-banner">
                    <h5 class="card-title">@yield('titulo-banner')</h5>
                    <p class="card-text">@yield('texto-banner')</p>
                </div>
            </div>
        </div>
    </div>
    <!-- cards -->
    <div class="card-group container-cards ">
        <div class="card" >
            @yield('img-card1')
            <div class="card-body">
                <h5 class="card-title text-center fs-3">@yield('titulo-card1')</h5>
                <p class="card-text fs-6">@yield('texto-card1')</p>  
            </div>
        </div>
        <div class="card ">
            @yield('img-card2')
            <div class="card-body">
                <h5 class="card-title text-center fs-3">@yield('titulo-card2')</h5>
                <p class="card-text fs-6 ">@yield('texto-card2')</p>       
            </div>
        </div>
    </div>
@endsection
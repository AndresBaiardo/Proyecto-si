@extends('nav')
@section('nav')


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/deportes.css">
    <title></title>
	<style>
		.header{
			background:url(/img/fondo-deportes.jpeg);
			background-size:cover;
			background-repeat: no-repeat;
			background-position: center;
			margin: auto;
		}
	</style>
</head>
<header class="header">
	<div class="header-container"> 
		<div class="position-relative">
			<div class="position-absolute top-50 start-50 translate-middle">
				<div id="div" >					
					<div class="d-none d-lg-block">
						<h1 class="titulos"> CURSOS DEPORTIVOS DISPONIBLES </h1>
					</div></div>
				</div>
			</div>
		</div>      
	</div>
</header>
@endsection

@section('cursos')
	<div class="card-group">
		<div class="card">
			<img src="{{ asset('img/futbol.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Futbol</h5>
				<a href="#" class="btn btn-primary">Ver Infomacion</a>
			</div>
		</div>
		<div class="card">
			<img src="{{ asset('img/boxeo.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Boxeo</h5>
				<a href="#" class="btn btn-primary">Ver Infomacion</a>
			</div>
		</div>
		<div class="card">
			<img src="{{ asset('img/basquetbol.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">basquetbol</h5>
				<a href="#" class="btn btn-primary">Ver Infomacion</a>
			</div>
		</div>
		<div class="card">
			<img src="{{ asset('img/voleibol.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Voleibol</h5>
				<a href="#" class="btn btn-primary">Ver Infomacion</a>
			</div>
		</div>
	</div>
@endsection
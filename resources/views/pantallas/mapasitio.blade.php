@extends('nav')
@section('nav')
    <div class="card-group " style="min-height: 70vh; width:50%; margin:auto;">
        <div class="card" style="width: 80%; margin-top:10%;margin-right:30px; border:0; ">
            <div class="card-header border-0 fs-2" >
                Nosotros
            </div>
            <ul class="list-group list-group-flush ">
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset" style="height:30px;" href="#">contactanos</a></li>
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset" style="height:30px;" href="#">Ubicanos</a></li>
            </ul>
        </div>
        <div class="card" style="width: 80%; margin-top:10%;margin-right:30px; border:0">
            <div class="card-header border-0 fs-2">
                Inscripciones
            </div>
            <ul class="list-group list-group-flush " style="border:0;" >
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset" style="height:30px;" href="#">Registrate</a></li>
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset" style="height:30px;" href="#">Inscribete</a></li>
            </ul>
        </div>
        <div class="card" style="width: 80%;margin-top:10%; margin-right:30px; border:0">
            <div class="card-header border-0 fs-2">
                Deportes
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset" style="height:30px;" href="/deportes">Todos los deportes</a></li>
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset" style="height:30px;" href="/boxeo">Boxeo</a></li>
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset"style="height:30px;" href="/futbol">Futbol</a></li>
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset"style="height:30px;" href="/tenis">Tenis</a></li>
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset"style="height:30px;" href="/beisbol">Beisbol</a></li>
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset"style="height:30px;" href="/basquetbol">Basquetbol</a></li>
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset"style="height:30px;" href="voleibol">Voleibol</a></li>
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset"style="height:30px;" href="/balonmano">BalonMano</a></li>
                <li class="list-group-item border-0 fs-5"><a class="nav-link text-reset"style="height:30px;" href="/natacion">Natacion</a></li>
                
            </ul>
        </div>
    </div>
@endsection
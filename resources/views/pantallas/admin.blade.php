@extends('nav')

@section('nav')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inscripcion.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
</head>

<div class="form-signup">
    <div class="container-form">
        <form  id="frmajax1"   class="row g-3">
            @csrf
            <h5 class="text-center fs-2">Registrate</h5>
            <div class="col-md-6">
                <label   class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control"  required>
            </div>
            <div class="col-md-6">
                <label   class="form-label">Descripcion</label>
                <input type="text" id="descripcion" class="form-control" name="descripcion" required>
            </div>
        
            <input type="button" id="registrar" class="btn btn-primary" value="Registrar">
            </div>
            <script src="js/cursos.js"></script>
        </form>
    </div>
</div>
@endsection
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
    
    <ol class="breadcrumb"> 
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item "><a href="/deportes">Deportes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Inscribete</li>
    </ol>  
    <div class="form-signup">
        <div class="container-form">
            <form  id="frmajax"   class="row g-3">
                @csrf
                <h5 class="text-center fs-2">Registrate</h5>
                <div class="col-md-6">
                    <label for="inputEmail4"  class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control"  required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4"  class="form-label">Apellidos</label>
                    <input type="text" id="apellidos" class="form-control" name="apellidos" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4"  class="form-label">Email</label>
                    <input type="email" id="correo" class="form-control"  name="correo" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4"  class="form-label">Contraseña</label>
                    <input type="password" id="psw" class="form-control" name="psw" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress"  class="form-label">Direccion</label>
                    <input type="text" id="direccion" class="form-control" name="direccion" placeholder="1234 Main St" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Direccion 2</label>
                    <input type="text" id="direccion2" name="direccion2" class="form-control" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="inputCity"  class="form-label">Ciudad</label>
                    <input type="text" id="cd" name="cd" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label for="inputZip"  class="form-label">Codigo Postal</label>
                    <input type="text" id="cp" class="form-control" name="cp" required>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="col-12">
                <div class="g-recaptcha" data-sitekey="6LcGcMQeAAAAAEgzzwYL8eqtIdqEn1rE0sglMJ5x"></div>
                 <br/>
                    
                <input type="button" id="registrar" class="btn btn-primary" value="Registrar">
                </div>
                <script src="js/validaciones.js"></script>
            </form>
        </div>
    </div>
    
     <!--
    <script src="js/validaciones.js"></scrip>
    <script src="js/validaciones.js"></script>-->
    
    
@endsection
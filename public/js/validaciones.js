//Funcion del botton con validaciones de los datos

$('#registrar').click(function(event){
    
    //Definir las variables de los datos y almacenamiento de las mismas
    var nombre, apellidos, correo, psw, expEmail, Contraseñas, Direccion, Direccion2, Ciudad, CodigoPostal, expcp ;

    //obtenemos las variables del formulario 
    Ciudad = $('#cd').val();
    CodigoPostal = $('#cp').val();
    Direccion = $('#direccion').val();
    Direccion2 = $('direccion2').val();
    nombre = $('#nombre').val();
    apellidos = $('#apellidos').val();
    correo = $('#correo').val();
    psw = $('#psw').val();
    //expEmail = /\w+@\w+\.[a-z]/;
    //expEmail = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/
    //expEmail = /^[^@\s]+[0-9]+[^@\s]+@[^@\s]+\.[^@\s]+\.[^@\s]+$/
    expEmail =/[a-z0-9!#$%&'*+/=?^_`{|}~-]+@[a-z0-9]+\.[a-z0-9\.]+$/
    //expEmail = /^[^@\s\d]+[0-9]+[^@\s]+@[^@\s]+\.[^@\s]+\.[^@\s]+$/;

    //Contraseñas
    Contraseñas = /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/;
    expcp = /^\d{5}$/


    //lenght contabelisa los caracteres 
    if(nombre.length == 0 || apellidos.length == 0 || correo.length == 0 ||  psw.length == 0 || Direccion.length == 0 || Ciudad.length == 0 || CodigoPostal.length == 0 ){
        //swal siw alaert, alerta, el campo y el icono 
        swal("Error....","No debe contener campos vacios","error");

    }else if(nombre.length > 10){
        swal("Error....","EL nombre es muy largo Max 10 caracteres","error");


    }else if(!expEmail.test(correo)){
        swal("Error....","Correo inválido","error");

    }else if(!Contraseñas.test(psw)){
        swal("Error....","Contraseña inválido","error");

    }else if (!expcp.test(CodigoPostal)){
        swal("Error...","Codigo postal invalido","error");
    

    }else if(nombre &&  expEmail && Contraseñas && expcp){
        $(document).ready(function(){
            $('#registrar').click(function(){
                var datos=$('#frmajax').serialize();
                $.ajax({
                    type:"POST",
                    url:"php/insertar.php",
                    data:datos,
                    success:function(r){
                        if(r==1){
                            swal("agregado correctamente");
                        }else{
                            swal("Fallo de servidor");
                        }
                    }
                })
                return false;
            })
        })
    }






});
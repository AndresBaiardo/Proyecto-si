$('#registrar').click(function(){
    var nombre,descripcion;

    nombre=$('#nombre').val();
    descripcion=$('#descripcion').val();

    var datos=$('#frmajax1').serialize();

    if(nombre.length==0 || descripcion.length==0){
        swal("Error....","No debe contener campos vacios","error");
    }else{
        $(document).ready(function(){
            $('#registrar').click(function(){
                var datos=$('#frmajax1').serialize();
                $.ajax({
                    type:"POST",
                    url:"php/insertar_curso.php",
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

    
})

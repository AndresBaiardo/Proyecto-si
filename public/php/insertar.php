<?php
    
    $conexion=mysqli_connect('127.0.0.1','root','', 'easport');

    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $psw=($_POST['psw']);
    $psw_hash=password_hash($psw,PASSWORD_BCRYPT);
    $direccion=$_POST['direccion'];
    $cd=$_POST['cd'];
    $cp=$_POST['cp'];
    $permiso='normal';
   

    $sql="INSERT into  users (name,apellidos,email,password,direccion,cd,cp,rol)
        values ('$nombre','$apellidos','$correo','$psw_hash','$direccion','$cd','$cp','$permiso')";
    echo mysqli_query($conexion,$sql);
?>
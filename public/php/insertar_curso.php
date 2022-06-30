<?php
    
    $conexion=mysqli_connect('127.0.0.1','root','', 'easport');

    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    
   

    $sql="INSERT into  cursos (nombre,descripcion)
        values ('$nombre','$descripcion')";
    echo mysqli_query($conexion,$sql);
    
?>
<?php
   require('conexionalmacen.php'); //sirve para conectar con la base de datos 
   $nombre_cliente=$_GET['nombre_cliente']; //aqui declaro una variable
   $apellido_paterno=$_GET["apellido_paterno"]; //aqui declaro una variable
   $fecha_registro=$_GET["fecha_registro"]; //aqui declaro una variable
   $correo=$_GET["correo"]; //aqui declaro una variable
   $contacto=$_GET["contacto"]; //aqui declaro una variable


   $query= "INSERT INTO cliente (nombre_cliente, apellido_paterno, fecha_registro, correo, contacto)
   values ('".$nombre_cliente."', '".$apellido_paterno."', '".$fecha_registro."', '".$correo."', '".$contacto."')";

   if ($objetoconexion->query($query) == TRUE) {
       echo'atualizacion';
  
      
    } else {
        echo'No atualizacion';
        }


  
?>
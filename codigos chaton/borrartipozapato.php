<?php

$id_tipo=$_POST['id_tipo']; //aqui declaro una variable


require('conexion.php');//sirve para conectar con la base de datos 

$query= " DELETE FROM `tipo` WHERE `id_tipo`='".$id_tipo."' ";


 if($objetoconexion->query($query)==true){//si cumple con las sentencias se actualiza
                    
      echo'borrado';//imprime

    } else {
        echo 'no borrado';//imprime
    }
$objetoconexion->close();//termina el proceso
?>
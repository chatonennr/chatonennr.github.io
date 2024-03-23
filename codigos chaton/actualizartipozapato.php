<?php

$tipo=$_POST['tipo']; //aqui declaro una variable
$id_tipo=$_POST['id_tipo'];//aqui declaro una variable

require('conexion.php');//sirve para conectar con la base de datos 

$query= "UPDATE `tipo` SET `tipo`='".$tipo."' WHERE `id_tipo`='".$id_tipo."' ";


 if($objetoconexion->query($query)==true){//si cumple con las sentencias se actualiza
                    
      echo'actualizacion';//imprime

    } else {
        echo 'no actualizado';//imprime
    }
$objetoconexion->close();//termina el proceso
?>
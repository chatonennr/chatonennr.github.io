<?php

$nombre=$_POST['nombre']; //aqui declaro una variable
$id_cliente=$_POST['id_cliente'];//aqui declaro una variable

require('conexion.php');//sirve para conectar con la base de datos 

$query= "UPDATE `cliente` SET `nombre`='".$nombre."' WHERE `id_cliente`='".$id_cliente."' ";


 if($objetoconexion->query($query)==true){//si cumple con las sentencias se actualiza
                    
      echo'actualizacion';//imprime

    } else {
        echo 'no actualizado';//imprime
    }
$objetoconexion->close();//termina el proceso
?>
<?php
require('conexionalmacen.php');//sirve para conectar con la base de datos 

$id_cliente=$_GET['id_cliente']; //aqui declaro una variable
$contacto=$_GET['contacto'];//aqui declaro una variable



$query= "UPDATE `cliente` SET `contacto` = '".$contacto."' WHERE `id_cliente`='".$id_cliente."' ";


 if($objetoconexion->query($query)==true){//si cumple con las sentencias se actualiza
                    
      echo'actualizacion';//imprime

    } else {
        echo 'no actualizado';//imprime
    }
$objetoconexion->close();//termina el proceso
?>
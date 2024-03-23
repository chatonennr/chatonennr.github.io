<?php
   require('conexionalmacen.php'); //sirve para conectar con la base de datos 

   $id_cliente=$_GET['id_cliente']; //aqui declaro una variable
   

   $query= "DELETE FROM `cliente` WHERE `id_cliente` = '$id_cliente' ";

   if($objetoconexion->query($query)==true){//si cumple con las sentencias se actualiza
                    
        echo'borrado';//imprime

    } else {
           echo 'no borrado';//imprime
        }

   $objetoconexion->close();
    
?>




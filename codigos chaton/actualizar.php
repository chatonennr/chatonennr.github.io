<?php

$calificacion=$_POST['calificacion']; //aqui declaro una variable
$id_calificacion=$_POST['id_calificacion'];//aqui declaro una variable

require('conexion.php');//sirve para conectar con la base de datos 

$query= "SELECT * FROM usuario WHERE  nom_usuario= '".$_POST['nom_usuario']."' AND password='".$_POST['password']."';";//doy de alta variables para selecionar los usuarios y contraseñas registradas


$resultado = $objetoconexion->query($query);//todo lo que esta en la query se guarda en resultado

$num_filas =$resultado->num_rows;//muestra el numero de regitros en las tablas


if($num_filas>0){  //condicionamos 

           $query2= "UPDATE `calificacion` SET `calificacion`='".$calificacion."' WHERE `id_calificacion`='".$id_calificacion."' "; //sirve para actualizar datos en la db

                if($objetoconexion->query($query2)==true){//si cumple con las sentencias se actualiza
                     echo'actualizacion';//imprime
                } else {
                     echo 'no actualizado';//imprime
                  }
$objetoconexion->close();//termina el proceso


}else{
echo 'usuario o contraseña no identificado en tu base de datos'; //imprime si algun dato esta mal ingresado

}

?>
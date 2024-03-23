<?php
require('conexion.php'); //sirve para conectar con la base de datos 
$id_materia=$_POST['id_materia']; //aqui declaro una variable
$id_alumno=$_POST["id_alumno"]; //aqui declaro una variable
$calificacion=$_POST["calificacion"]; //aqui declaro una variable



$query= "SELECT * FROM usuario WHERE nom_usuario = '".$_POST['nom_usuario']."' AND password='".$_POST['password']."';";//doy de alta variables para selecionar los usuarios y contraseñas registradas


$resultado = $objetoconexion->query($query);//todo lo que esta en la query se guarda en resultado

$num_filas =$resultado->num_rows;//muestra el numero de regitros en las tablas


if($num_filas>0){  //condicionamos 

    $query2= "INSERT INTO `calificacion`(`id_materia`, `id_alumno`, `calificacion`) values ('".$id_materia."','".$id_alumno."','".$calificacion."')";

                     if($objetoconexion->query($query2)==true){
                             echo'insertado';
                      }else {
                         echo 'no insertado';
                    }
$objetoconexion->close();


}else{
echo 'usuario o contraseña no identificado en tu base de datos'; //imprime si algun dato esta mal ingresado

}
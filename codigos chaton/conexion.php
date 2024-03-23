<?php
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$databases = 'escuela';

$objetoconexion = new mysqli ($servidor, $usuario, $password, $databases);//conecta con base de datos

if ($objetoconexion->connect_error){ //comprueba error de conexion
    die('conexion fallida'.$objetoconexion->connect_error); //si  hay error mata proceso

}

//$objetoconexion->close(); //cierra conexion


?>
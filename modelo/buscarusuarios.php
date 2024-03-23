<?php
$constante = $_GET["usuario"];
$constante2 = $_GET["contrasena"];
session_start();
$mysqli = new mysqli("localhost","root","","almacen");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
$variable = $mysqli -> query("SELECT count(id_usuario) as veces,
if(count(id_usuario)=1,'YES','NO') as razon FROM `usuario` 
where username = '".$constante."' and contrasena ='".$constante2."';");
$rows = $variable->fetch_all(MYSQLI_ASSOC);

$_SESSION["sesionusuario"]=$constante;
$json['<estado']="OK";
$json['respuesta'] = $rows[0]["razon"];

print_r(json_encode($json));

$mysqli -> close();
?>
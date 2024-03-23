<?php
// Insertar de datos
$nombre_cliente = $_GET["nombre_cliente"];
$apellido_paterno = $_GET["apellido_paterno"];
$fecha_registro = $_GET["fecha_registro"];
$correo = $_GET["correo"];
$contacto = $_GET["contacto"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "almacen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO cliente (nombre_cliente, apellido_paterno, fecha_registro, correo, contacto)
VALUES ('".$nombre_cliente."', '".$apellido_paterno."', '".$fecha_registro."', '".$correo."', '".$contacto."')";

if ($conn->query($sql) === TRUE) {
  $json['ESTADO'] = "OK";

print_r(json_encode($json));
} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
  $json['ESTADO'] = "ERROR";

print_r(json_encode($json));
}


$conn->close();
?>
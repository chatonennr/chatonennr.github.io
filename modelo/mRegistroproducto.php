<?php
// Insertar de datos
$nombre_producto = $_GET["nombre_producto"];
$precio = $_GET["precio"];
$existencia = $_GET["existencia"];

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

$sql = "INSERT INTO producto (nombre_producto, precio, existencia)
VALUES ('".$nombre_producto."', '".$precio."', '".$existencia."')";

if ($conn->query($sql) === TRUE) {
  $json['ESTADO'] = "OK";

print_r(json_encode($json));
} else {
  
  $json['ESTADO'] = "ERROR";

print_r(json_encode($json));
}


$conn->close();
?>
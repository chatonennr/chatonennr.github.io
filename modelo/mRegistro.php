<?php
// Insertar de datos
$usuario = $_GET["usuario"];
$contrasena = $_GET["contrasena"];
$id_rol = $_GET["id_rol"];
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

$sql = "INSERT INTO usuario (username, contrasena, id_rol)
VALUES ('".$usuario."', '".$contrasena."', '".$id_rol."')";

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
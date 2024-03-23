<?php
//Eliminar
$constante = $_GET["id_cliente"];

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

$sql = "DELETE FROM cliente where id_cliente=".$constante;

if ($conn->query($sql) === TRUE) {
  $json['Estado'] = "OK";

print_r(json_encode($json));
} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
  $json['Estado'] = "ERROR";

  print_r(json_encode($json));

}


$conn->close();
?>
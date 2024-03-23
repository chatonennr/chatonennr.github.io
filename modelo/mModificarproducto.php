<?php


$nombre_producto = $_GET["nombre_producto"];
$precio = $_GET["precio"];
$existencia = $_GET["existencia"];
$id_producto = $_GET["id_producto"];

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

$sql = "UPDATE `producto` SET `nombre_producto` = '".$nombre_producto."', `precio` = '".$precio."', `existencia` = '".$existencia."' WHERE `id_producto`='".$id_producto."' ";

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


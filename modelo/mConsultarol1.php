<?php

//hacemos conexion con la base de datos
$mysqli = new mysqli("localhost","root","","almacen");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


// hacemos la consulta

$variable = $mysqli -> query("SELECT * FROM `rol`");
$rows = $variable->fetch_all(MYSQLI_ASSOC);

$select="<option id='0' value='0'>Seleccione una opcion</option>";


foreach ($rows as $rol) {
    $id_rol = $rol["id_rol"];
    $nombre_rol = $rol["nombre_rol"];
    
      $select.="<option id=".$id_rol." value=".$id_rol.">".$nombre_rol."</option>";
    
}


// Preparamos la respuesta JSON
$json['Estado'] = "OK";
$json['respuesta'] = $select;

// Imprimimos la respuesta JSON
print_r(json_encode($json));

// Cerramos la conexión a la base de datos
$mysqli->close();
?>
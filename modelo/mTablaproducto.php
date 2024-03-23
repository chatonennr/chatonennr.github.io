<?php

//hacemos conexion con la base de datos
$mysqli = new mysqli("localhost","root","","almacen");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


// hacemos la consulta

$variable = $mysqli -> query("SELECT * FROM `producto`");
$rows = $variable->fetch_all(MYSQLI_ASSOC);


// Generamos la tabla HTML
$tbl1 = "<table id='tablaproducto' class='table table-bordered table-striped'>";
$tbl1.= "<thead>
           <tr>
               <th>id_producto</th>
               <th>nombre_producto</th>
               <th>precio</th>
               <th>stock</th>
               <th>eliminar</th>
               <th>modificar</th>

           </tr>
        </thead>";

foreach ($rows as $producto) {
    $id_producto = $producto["id_producto"];
    $nombre_producto = $producto["nombre_producto"];
    $precio = $producto["precio"];
    $existencia = $producto["existencia"];

    $tbl1 .= "<tr>
                <td>$id_producto</td>
                <td>$nombre_producto</td>
                <td>$precio</td>
                <td>$existencia</td>
                <td><button class='btn btn-primary btn-block' onclick='eliminarproducto(\"$id_producto\");'>ELIMINAR</button></td>
                <td><button class='btn btn-primary btn-block' onclick='modificarproductoo(\"$id_producto\");'>modificar</button></td>
                
            </tr>";
}
$tbl1 .= "</table>";

// Preparamos la respuesta JSON
$json['Estado'] = "OK";
$json['respuesta'] = $tbl1;

// Imprimimos la respuesta JSON
print_r(json_encode($json));

// Cerramos la conexión a la base de datos
$mysqli->close();
?>
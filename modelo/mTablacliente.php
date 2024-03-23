<?php

//hacemos conexion con la base de datos
$mysqli = new mysqli("localhost","root","","almacen");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


// hacemos la consulta

$variable = $mysqli -> query("SELECT * FROM `cliente`");
$rows = $variable->fetch_all(MYSQLI_ASSOC);


// Generamos la tabla HTML
$tbl = "<table id='tablacliente' class='table table-bordered table-striped'>";
$tbl.= "<thead>
           <tr>
             <th>id_cliente</th>
             <th>nombre_cliente</th>
             <th>apellido_paterno</th>
             <th>correo</th>
             <th>contacto</th>
             <th>eliminar</th>
             <th>modificar</th>

           </tr>
        </thead>";

foreach ($rows as $cliente) {
    $id_cliente = $cliente["id_cliente"];
    $nombre_cliente = $cliente["nombre_cliente"];
    $apellido_paterno = $cliente["apellido_paterno"];
    $correo = $cliente["correo"];
    $contacto = $cliente["contacto"];

    $tbl .= "<tr>
                <td>$id_cliente</td>
                <td>$nombre_cliente</td>
                <td>$apellido_paterno</td>
                <td>$correo</td>
                <td>$contacto</td>
                <td><button class='btn btn-primary btn-block' onclick='eliminarcliente(\"$id_cliente\");'>ELIMINAR</button></td>
                <td><button class='btn btn-primary btn-block' onclick='modificar(\"$id_cliente\");'>modificar</button></td>
                
            </tr>";
}
$tbl .= "</table>";

// Preparamos la respuesta JSON
$json['Estado'] = "OK";
$json['respuesta'] = $tbl;

// Imprimimos la respuesta JSON
print_r(json_encode($json));

// Cerramos la conexión a la base de datos
$mysqli->close();
?>
<?php
session_start();


if(!isset($_SESSION['sesionusuario']))
{
  $json['Estado'] = "ERROR";
  $json['respuesta'] = "sin token";
 print_r(json_encode($json));
  /*$url=`../vista/Vlogin.php`;
  echo "<script>alert('Sesión finalizada, ingrese sus datos nuevamente'); window.close();</script>";
	//echo "<script>alert('".$msj."'); window.close();</script>";
	session_destroy();
	//echo '<meta http-equiv=refresh content="1; '.$url.'">';
	die;*/
}
else
{
  //hacemos conexion con la base de datos
  $mysqli = new mysqli("localhost","root","","almacen");
  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }


  // hacemos la consulta

  $variable = $mysqli -> query("SELECT * FROM `usuario`");
  $rows = $variable->fetch_all(MYSQLI_ASSOC);


  // Generamos la tabla HTML
  $tbl = "<table id='tablausuario' class='table table-bordered table-striped'>";
  $tbl.= "<thead>
            <tr>
                <th>id_usuario</th> 
                <th>username</th>
                <th>contraseña</th>
                <th>eliminar</th>
                <th>modificar</th>

            </tr>
          </thead>";

  foreach ($rows as $usuario) {
      $id_usuario = $usuario["id_usuario"];
      $username = $usuario["username"];
      $contrasena = $usuario["contrasena"];

      $tbl .= "<tr>
                  <td>$id_usuario</td>
                  <td>$username</td>
                  <td>$contrasena</td>
                  <td><button class='btn btn-primary btn-block' onclick='eliminar(\"$id_usuario\");'>ELIMINAR</button></td>
                  <td><button class='btn btn-primary btn-block' onclick='modificarusuario(\"$id_usuario\");'>modificar</button></td>
                  
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
}
?>
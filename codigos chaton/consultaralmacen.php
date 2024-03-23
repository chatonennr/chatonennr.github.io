<?php
require('conexionalmacen.php');

$id_cliente=$_GET["id_cliente"];

$query = "SELECT nombre_cliente, apellido_paterno, fecha_registro, correo, contacto FROM `cliente` WHERE `id_cliente` = '$id_cliente' ";


$resultado = $objetoconexion->query($query);


$deserializado = $resultado->fetch_all(MYSQLI_ASSOC);   //el fecth descompone todo para entenderlo mejor 

$tabla = '<table border=1>
<th>nombre_cliente</th>
<th>apellido_paterno</th>
<th>fecha_registro</th>
<th>correo</th>
<th>contacto</th>

';

foreach ($deserializado as $a){  //

    $tabla.="<tr>
    <td>".$a['nombre_cliente']."</td>
    <td>".$a['apellido_paterno']."</td>
    <td>".$a['fecha_registro']."</td>
    <td>".$a['correo']."</td>
    <td>".$a['contacto']."</td>
    
    

    </tr>";
    //print_r($a['marca']);
    //print_r('<br>');

}$tabla.="</table>";

echo $tabla;

?>
<?php
$id_alumno=$_POST["id_alumno"];

require('conexion.php');

$query = "SELECT persona.a_paterno, persona.a_materno, persona.nombre, materia.nom_materia, calificacion.calificacion,alumno.id_alumno as matricula FROM `calificacion` INNER JOIN materia on calificacion.id_materia = materia.id_materia INNER JOIN alumno on calificacion.id_alumno = alumno.id_alumno INNER JOIN persona on alumno.id_persona = persona.id_persona WHERE alumno.id_alumno = '".$id_alumno."' ";




$resultado = $objetoconexion->query($query);


$deserializado = $resultado->fetch_all(MYSQLI_ASSOC);   //el fecth descompone todo para entenderlo mejor 

$tabla = '<table border=1>
<th>a_paterno</th>
<th>a_materno</th>
<th>nombre</th>
<th>nom_materia</th>
<th>calificacion</th>

';

foreach ($deserializado as $a){  //

    $tabla.="<tr>
    <td>".$a['a_paterno']."</td>
    <td>".$a['a_materno']."</td>
    <td>".$a['nombre']."</td>
    <td>".$a['nom_materia']."</td>
    <td>".$a['calificacion']."</td>
    
    

    </tr>";
    //print_r($a['marca']);
    //print_r('<br>');

}$tabla.="</table>";

echo $tabla;

?>


</tr>"

<?php
$id_alumno=$_POST["id_alumno"];

require('conexion.php');

$query = "SELECT AVG (calificacion) AS promedio FROM `calificacion` INNER JOIN materia on calificacion.id_materia = materia.id_materia INNER JOIN alumno on calificacion.id_alumno = alumno.id_alumno INNER JOIN persona on alumno.id_persona = persona.id_persona WHERE alumno.id_alumno = '".$id_alumno."'; ";




$resultado = $objetoconexion->query($query);


$deserializado = $resultado->fetch_all(MYSQLI_ASSOC);

$tabla = '<table border=1>
<th>promedio</th>


';

foreach ($deserializado as $a){

    $tabla.="<tr>
    <td>".$a['promedio']."</td>
    
    
    

    </tr>";
    //print_r($a['marca']);
    //print_r('<br>');

}$tabla.="</table>";

echo $tabla;

?>



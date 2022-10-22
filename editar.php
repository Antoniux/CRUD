<link rel="stylesheet" type="text/css" href="css/estilosbase.css">
<h1>Elija una opción para editar</h1>
<?php
require("conexion.php");
include 'includes/menu.php';
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
mysqli_set_charset($conexion,"utf8");
$consulta= "SELECT * FROM contactos";
$resultados=mysqli_query($conexion,$consulta);
echo "<table>";
echo "<th> ID </th>";
echo "<th> Nombre </th>";
echo "<th> Apellido </th>";
echo "<th> Genero </th>";
echo "<th> Experiencia </th>";
echo "<th> Provincia </th>";
echo "<th> Especialidades</th>";
echo "<th> Color</th>";
echo "<th> Fecha Completa</th>";
foreach($resultados as $fila){
    $id=$fila['id'];
    $nombre=$fila['nombre'];
    $apellido=$fila['apellido'];
    $genero=$fila['genero'];
    $experiencia=$fila['experiencia'];
    $provincia=$fila['provincia'];
    $especialidades=$fila['especialidades'];
    $color=$fila['color'];
    $fechacompleta=$fila['fecha completa'];
    echo "<tr>
    <td align = center>
    <a href='edit.php?id=$id&nombre=$nombre&telefono=$telefono
    &empresa=$empresa&estado=$estado&foto=$img'>$id</a></td>
    <td align='center' >$nombre</td>
    <td align='center' >$apellido</td>
    <td align='center' >$genero</td>
    <td align='center' >$experiencia</td>
    <td align='center' >$provincia</td>
    <td align='center' >$especialidades</td>
    <td align='center' >$color</td>
    <td align='center' >$fechacompleta</td>
    <td align='center' ><img src='imagenes/$img'></td>
    </tr>";
}
echo "</table>";
include 'includes/footer.php';
?>
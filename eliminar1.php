<link rel="stylesheet" type="text/css" href="css/estilosbase.css">
<h1>Elija un ID a eliminar</h1>
<?php
require("conexion.php");
include 'includes/menu.php';
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if(mysqli_connect_errno()){
    echo "Error en la conexion";
    exit();
}
mysqli_set_charset($conexion,"utf8");
$consulta= "SELECT * FROM contactos WHERE id='".$_REQUEST['id']."'";
$resultados=mysqli_query($conexion,$consulta);
echo "<table>";
echo "<th> ID </th>";
echo "<th> Nombre </th>";
echo "<th> Telefono </th>";
echo "<th> Empresa </th>";
echo "<th> Estado Civil </th>";
echo "<th> Foto </th>";
foreach($resultados as $fila){
    $id=$fila['id'];
    $nombre=$fila['nombre'];
    $telefono=$fila['telefono'];
    $empresa=$fila['empresa'];
    $estado=$fila['Estado Civil'];
    $img=$fila['foto'];
    echo "<tr>
    <td align = center>
    <a href='eliminar.php?id=$id&nombre=$nombre&telefono=$telefono
    &empresa=$empresa&estado=$estado&foto=$img'>$id</a></td>
    <td align='center' >$nombre</td>
    <td align='center' >$telefono</td>
    <td align='center' >$empresa</td>
    <td align='center' >$estado</td>
    <td align='center' ><img src='imagenes/$img'></td>
    </tr>";
}
echo "</table>";
?>
<form action="eliminar2.php" method="post">
    <div class="eliminar">
        <span>Estas seguro de eliminar a este usuario?</span>
        <input type="submit" name="submit" value="SI">&nbsp<a href="Eliminar.php">No</a>
        <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?> ">
    </div>
</form>
<?php include 'includes/footer.php';?>
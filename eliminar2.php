<link rel="stylesheet" href="css/estilosbase.css" type="text/css">
<h1>Eliminar registro seleccionado</h1>
<?php
include 'includes/menu.php';
require ('conexion.php');
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if(mysqli_connect_errno()){
    echo "Error en la conexion";
    exit();
}
mysqli_set_charset($conexion,"utf8");
$consulta="DELETE FROM contactos WHERE id='".$_REQUEST['id']."'";
$resultados=mysqli_query($conexion,$consulta);
if($resultados==false){
    echo "<h1 class='diferente'>Error en la consulta</h1>";
}
else
    echo "<h1 class='diferente'>El usuario ha sido eliminado</h1>";
    include 'includes/footer.php';
?>
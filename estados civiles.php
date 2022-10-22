<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/estilosbase.css">
</head>
<body>

<?php
require ("conexion.php");
    include 'includes/menu.php';
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
    $consulta="SELECT * FROM contactos `Estado Civil`";
    mysqli_set_charset($conexion,"utf8");
    $resultados=mysqli_query($conexion,$consulta);
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th data-titulo='Id'> Id </th>";
    echo "<th data-titulo='Nombre'> Nombre </th>";
    echo "<th data-titulo='Telefono'> Teléfono </th>";
    echo "<th data-titulo='Estado Civil'> Estado Civil </th>";
    echo "<th data-titulo='Foto'> Foto </th>";
    echo "</tr>";
    echo "</thead>";
    foreach($resultados as $fila){
        $img=$fila['foto'];
        echo "<tr>";
        echo "<td data-titulo='Id'>".$fila['id']."</td>"."<td data-titulo='Nombre'>
        ".$fila['nombre'].
        "</td>"."<td data-titulo='Teléfono'>".$fila['telefono']."</td>".
        "<td data-titulo='Estado civil'>".$fila['Estado Civil'].
        "</td>"."<td data-titulo='Foto'>"."<img src='imagenes/$img'>"."</td>";
        echo "</tr>";
        $bol=true;
    }
    if($bol==false){
        echo "<script> alert('No tenemos a esa persona')</script>";
        echo"<h1> Registro no localizado</h1>";
    }
    else
    echo"<h1> Registro localizado</h1>";
    echo "</table>";
    mysqli_close($conexion);
    include 'includes/footer2.php';
    ?>
</body>
</html>
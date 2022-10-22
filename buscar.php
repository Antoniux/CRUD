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
    include 'includes/menu.php';
    require ("conexion.php");
    $bol=false;
    $buscar=$_POST["buscar"];
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
    $consulta="SELECT * FROM contactos WHERE `nombre` LIKE '%$buscar%'";
    mysqli_set_charset($conexion,"utf8");
    $resultados=mysqli_query($conexion,$consulta);
    echo "<table>";
    echo "<th> Id </th>";
    echo "<th> Nombre </th>";
    echo "<th> Teléfono </th>";
    echo "<th> Empresa </th>";
    echo "<th> Foto </th>";
    foreach($resultados as $fila){
        $img=$fila['foto'];
        echo "<tr>";
        echo "<td>".$fila['id']."</td> "."<td>".$fila['nombre']."</td> ".
        "<td> ".$fila['telefono']."</td>"."<td> ".
        $fila['empresa']."</td>"."<td>"."<img src='imagenes/$img'>"."</td>";
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
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
    require("conexion.php");
    $bol=false;
    include 'includes/menu.php';
    $opcion=$_POST['opcion'];
    if(empty($opcion)){
        echo "favor ingresar un valor valido";
        header("Location:http://localhost/php/crud/Busqueda%202.php");
        }

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
    $consulta="SELECT * FROM contactos WHERE `Estado Civil` LIKE '$opcion'";
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
        echo "<td>".$fila['id']."</td> "."<td>".$fila['nombre']."</td> ".
        "<td> ".$fila['telefono']."</td>"."<td> ".
        $fila['empresa']."</td>"."<td>"."<img src='imagenes/$img'>"."</td>";
        echo "</tr>";
        $bol=true;
    }
    if($bol==false){
        echo "<h1>Registro no localizado</h1>";
    }
    else
    echo"<h1> Registro localizado</h1>";
    echo "</table>";
    mysqli_close($conexion);
    include 'includes/footer2.php';
    ?>
</body>
</html>
    ?>
</body>
</html>
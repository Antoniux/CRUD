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
    <h1>Datos ingresados a la base de datos</h1>
    <?php
    require("conexion.php");
    include 'includes/menu.php';
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
    $consulta="SELECT * FROM contactos";
    mysqli_set_charset($conexion,"utf8");
    $resultados=mysqli_query($conexion,$consulta);
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th data-titulo='id'> Id </th>";
    echo "<th data-titulo='nombre'> Nombre </th>";
    echo "<th data-titulo='apellido'> Apellido </th>";
    echo "<th data-titulo='genero'> Genero </th>";
    echo "<th data-titulo='experiencia'> Experiencia </th>";
    echo "<th data-titulo='provincia'> Provincia </th>";
    echo "<th data-titulo='Epecialidades'> Especialidades </th>";
    echo "<th data-titulo='Fecha Completa'> Fecha Completa </th>";
    echo "<th data-titulo='Foto'> Foto </th>";
    echo "</tr>";
    echo "</thead>";
    foreach($resultados as $fila){
        $img=$fila['foto'];
        echo "<tr>";
        echo "<td data-titulo='Id'>".$fila['id']."</td>"."<td data-titulo='Nombre'>
        ".$fila['nombre'].
        "</td>"."<td data-titulo='Teléfono'>".$fila['telefono']."</td>".
        "<td data-titulo='Empresa'>".$fila['empresa'].
        "</td>"."<td data-titulo='Foto'>"."<img src='imagenes/$img'>"."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conexion);
    include 'includes/footer.php';
    ?>
</body>
</html>
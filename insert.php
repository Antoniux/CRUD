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
    include 'includes/menu.php';
    $nombre=$_POST[""];
    $apellido=$_POST[""];
    $genero=$_POST[""];
    $experiencia=$_POST[""];
    $provincia=$_POST[""];
    $especialidades=$_POST[""];
    $color=$_POST[""];
    $fecha Completa=$_POST[""];

    $foto=$_FILES["foto"];
    $tmp_name=$foto['tmp_name'];
    $carpeta_destino="imagenes";
    $archivo_img=$foto['name'];
    $type_img=$foto['type'];
    if(strpos($type_img,'gif') || strpos($type_img,'jpg') ||
    strpos($type_img,'jpeg') || strpos($type_img,'png'))
    $destino=$carpeta_destino.'/'.$archivo_img;
    //echo $archivo_img;

    //print_r($archivo_img);
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
    $consulta="INSERT INTO contactos(nombre, telefono, empresa, foto, `Estado civil`)
    VALUES('$nombre','$telefono','$empresa','$archivo_img','$estado')";

    move_uploaded_file($tmp_name, $destino);

    mysqli_set_charset($conexion,"utf8");
    $resultados=mysqli_query($conexion,$consulta);
    if($resultados==false) {
        echo "error en la consulta";
    }
    else{
        echo "<h1>Registro Guardado</h1>";
    }
    mysqli_close($conexion);
    include 'includes/footer2.php';
    ?>
</body>
</html>
<link rel="stylesheet" href="css/estilosbase.css">

<?php
echo "<h1>Actualizar Registro</h1>";
    include 'includes/menu.php';
    $id=$_REQUEST['id'];
    $nombre=$_REQUEST["nuevonombre"];
    $telefono=$_REQUEST["nuevotel"];
    $empresa=$_REQUEST["nuevaempresa"];
    $estado=$_REQUEST["nuevoestado"];
    $foto = $_FILES["foto"];
    $tmp_name=$foto['tmp_name'];
    $carpeta_destino="imagenes";
    $archivo_img=$foto['name'];
    $type_img=$foto['type'];
    if(strpos($type_img,'gif')||strpos($type_img,'jpg')
    ||strpos($type_img,'jpeg')||strpos($type_img,'png'))
    $destino=$carpeta_destino.'/'.$archivo_img;
    move_uploaded_file($tmp_name,$destino);
    require('conexion.php');
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
    if(mysqli_connect_errno()){
        echo "Error en la conexion";
        exit();
    }
    mysqli_set_charset($conexion,"utf8");
    $consulta="UPDATE contactos SET nombre = '$nombre',
    telefono = '$telefono', empresa = '$empresa', `Estado Civil`='$estado',foto=
    '$archivo_img' WHERE id='$id'";
    $resultados=mysqli_query($conexion,$consulta);
    if($resultados==false){
        echo "Error en la consulta";
    }
    else{
        echo "<h1 class='diferente'>Registro actualizado</h1>";
    }
    include 'includes/footer.php';
?>
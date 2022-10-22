<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/estilosbase.css">
</head>
<body>
    <h1>Actualizar el registro seleccionado</h1>
    <?php include 'includes/menu.php';?>
    <form action="actualiza.php" method="post" enctype="multipart/form-data">
        <table>

        <th>Nombre:</th>
        <th>Telefono:</th>
        <th>Empresa:</th>
        <th>Estado Civil:</th>
        <th>Foto:</th>
        <tr>
            <td><input type="text" name="nuevonombre"
            value="<?php echo $_REQUEST['nombre'];?>"></td>
            <td><input type="text" name="nuevotel"
            value="<?php echo $_REQUEST['telefono'];?>"></td>
            <td><input type="text" name="nuevaempresa"
            value="<?php echo $_REQUEST['empresa'];?>"></td>
            <td><input type="text" name="nuevoestado"
            value="<?php echo $_REQUEST['estado'];?>"></td>
            <td><input type="file" name="foto"></td>
        </tr>

        </table>
        <input class="btn" type="submit" name="submit" value="Actualizar"/>
        <input type="hidden" class="btn" name="id" value="<?php echo $_REQUEST['id']; ?>"/>

    </form>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
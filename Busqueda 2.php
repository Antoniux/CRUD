<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/css/all.min.css">
    <link rel="stylesheet" href="css/estilosbase.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <header>
        <div class="menu_bar">
            <i class="fas fa-bars"></i>
            <a href="#" class="btn_menu">Menu</a>
        </div>
        <nav>
            <span id="logo"> <img src="imagenes/sas3212321.png" width="100px"
                 height="70px" alt="">
            </span>
            <ul>
                <li><a href="conexion2.php"><i class="fas fa-home"></i>Inicio</a></li>
                <li><a href="insertar.html"><i class="fas fa-briefcase"></i>Insertar</a></li>
                <li class="submenu"><a href=""><i class="fas fa-project-diagram">
                </i>Consultas</a>
                    <ul class="children">
                        <li><a href="busqueda.html">Buscar por nombre</a></li>
                        <li><a href="estados civiles.php">Mostrar estado civil</a></li>
                        <li><a href="Busqueda 2.php">Buscar genero</a></li>
                    </ul>
                </li>
                <li><a href="editar.php"><i class="fab fa-servicestack"></i>Actualizar</a></li>
                <li><a href="Eliminar.php"><i class="fas fa-id-card"></i>Eliminar</a></li>
            </ul>
        </nav>
    </header>
    <h1>Seleccione la opción a buscar</h1>
    <form action="buscar2.php" method="POST">
        <p>Ingrese el genero a buscar</p>
        <select name="opcion" Value="-Any-">
            <option selected disabled>-Selecciona una opción-</option>
            <option value="casad%">Masculino</option>
            <option value="solter%">Femenino</option>
            <option value="libre">Otro</option>
        </select>
        <input type="submit" value="Buscar">
    </form>
    <link rel="stylesheet" href="css/footer2.css">
<footer>
        <p class="footer">Todos los derechos reservados</p>
        <p class="footer">Desarrolladores web:</p>
        <p class="footer">Antonio Arrieta, Tiffany Solano, Santiago Villareal, Samuel Medina </p>
    </footer>

    
</body>
</html>
</html>
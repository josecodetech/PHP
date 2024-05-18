<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestion de Tareas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Sistema de Gestion de Tareas</h1>
        <div class="menu">
            <a href="index.php">Inicio</a>
            <a href="insertar.php">Agregar tarea</a>
        </div>
        <h2>Lista de tareas</h2>
        <ul>
            <?php
                include_once "conexion.php";
                $sql="SELECT * FROM tareas";
                $resultado=$conn->query($sql);
                if ($resultado->num_rows>0){
                    while($fila=$resultado->fetch_assoc()){
                        echo "<li>".$fila["descripcion"]." | <a href='editar.php?id=".$fila["id"]. "'>Editar</a> | <a href='borrar.php?id=".$fila["id"]."'>Borrar</a></li>";
                    }

                } else {
                    echo"<li>No hay tareas</li>";
                }
                $conn->close();
            ?>
            
        </ul>
    </div>
</body>
</html>
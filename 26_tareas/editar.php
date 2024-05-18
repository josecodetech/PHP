<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Editar Tarea</h1>
        <div class="menu">
            <a href="index.php">Inicio</a>
        </div>
        <?php
            include_once "conexion.php";
            if ($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["id"])){
                $id = $_GET["id"];
                $sql = "SELECT * FROM tareas WHERE id=$id";
                $resultado = $conn->query($sql);
                if ($resultado->num_rows==1){
                    $fila = $resultado->fetch_assoc();
                    echo "<form action='actualizar.php' method='post'>";
                    echo "<input type='hidden' name='id' value='".$fila["id"]."'>";
                    echo "<label for='descripcion'>Descripcion:</label>";
                    echo "<input type='text' id='descripcion' name='descripcion' value='".$fila["descripcion"]."'required>";
                    echo "<button type='submit'>Actualizar Tarea</button>";
                    echo "</form>";
                } else {
                    echo "No se encontro la tarea";
                }
            }else{
                echo "ID no proporcionado";
            
            } $conn->close();
        ?>
    </div>
</body>
</html>
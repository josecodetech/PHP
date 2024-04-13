<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <div class="menu">
        <a href="entradas.php">Nueva entrada</a>
    </div>
    <?php
    include_once "conexion.php";
    $consulta = $conn->query("SELECT * FROM entradas ORDER BY fecha DESC");
    if ($consulta->num_rows > 0) {
        while ($fila = $consulta->fetch_assoc()) {
           echo "<div class='entrada'>";
           echo "<h2>".$fila['titulo']."</h2>";
           echo "<p>Por ".$fila['usuario']." el ".$fila['fecha']."</p>";
           echo "<p>".$fila['descripcion']."</p>";
           echo "<p>".$fila['etiquetas']."</p>";
           echo "</div>";
        }
    }else{
        echo "No hay entradas";
    }
    $conn->close();
    ?>
</body>
</html>
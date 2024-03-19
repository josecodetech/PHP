<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Artículos</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <div class="menu">
    <a href="index.php">Inicio</a>
        <a href="insertar.html">Insertar</a>
        <a href="modificar.html">Modificar</a>
        <a href="eliminar.html">Eliminar</a>
    </div>
    <?php
    include_once "./php/config.php";
    $consulta = $conn->query("SELECT * FROM articulos");
    if ($consulta->num_rows > 0) {
        echo "<div class='catalogo'>";
        while ($fila = $consulta->fetch_assoc()) {
            echo "<div class='articulo'>";
            echo "<h2>" . $fila['nombre'] . "</h2>";
            echo "<p>" . $fila['descripcion'] . "</p>";
            echo "<p>Precio: $" . $fila['precio'] . "</p>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        header("Location: insertar.html");
    }
    ?>
</body>
</html>

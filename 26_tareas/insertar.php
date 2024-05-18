<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar tarea</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Agregar Tarea</h1>
    </div>
    <div class="menu">
        <a href="index.php">Inicio</a>
    </div>
    <form action="agregar.php" method="post">
        <label for ="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion" required>
        <button type="submit">Agregar Tarea</button>
    </form>
</body>
</html>
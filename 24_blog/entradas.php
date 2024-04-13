<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar entrada</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>    
    <div class="menu">
        <a href="index.php">Mostrar entradas</a>
    </div>
    <div class="formulario">
        <h2>Insetar entrada</h2>
        <form action="insertar.php" method="post">
            <label for="usuario">Usuario: </label>
            <input type="text" id="usuario" name="usuario" required><br>
            <label for="titulo">Titulo: </label>
            <input type="text" id="titulo" name="titulo" required><br>
            <label for="descripcion">Descripcion:</label> 
            <textarea id="descripcion" name="descripcion" required></textarea><br>
            <label for="etiquetas">Etiquetas:</label>
            <input type="text" id="etiquetas" name="etiquetas"><br>
            <button type="submit">Publicar</button>
        </form>
    </div>
</body>
</html>


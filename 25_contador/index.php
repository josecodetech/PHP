<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Contador de visitas</title>
</head>
<body>
    <div class="contenedor">
        <h1>Contador de visitas</h1>
        <?php 
        $contador_fichero="contador.txt";
        $ip = $_SERVER['REMOTE_ADDR'];
        $contador = file_get_contents($contador_fichero);
        $contador++;
        file_put_contents($contador_fichero,$contador);
        echo "<p>Visitas totales: $contador</p>";
        echo "<p>Tu IP es: $ip</p>";
        ?>
    </div>
</body>
</html>
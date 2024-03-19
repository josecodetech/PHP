CREATE DATABASE IF NOT EXISTS mi_base_de_datos;
USE mi_base_de_datos;

CREATE TABLE IF NOT EXISTS articulos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion TEXT,
    precio DECIMAL(10, 2)
);
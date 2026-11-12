<?php
$host = 'servidor_db'; // Nombre del servicio MySQL en el docker-compose
$usuario = 'root';
$password = 'clave_secreta';
$base_datos = 'catalogo_db';

// Intentar la conexión a MySQL
$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("❌ Error de conexión a la Base de Datos: " . $conexion->connect_error);
} else {
    echo "<h1>¡Hola Mundo desde la Aplicación Web!</h1>";
    echo "<p>✅ Conexión exitosa a la base de datos MySQL usando Docker Compose.</p>";
}
?>
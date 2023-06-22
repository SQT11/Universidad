<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'Universidad');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // Verificar si hay errores en la conexión
  if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
  }

?>

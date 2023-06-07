<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Universidad";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST['agregar'])) {
    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $tipo = $_POST['tipo'];

    // Insertar opciones seleccionadas en la tabla "tabla_opciones"
    foreach ($_POST['opciones'] as $opcion) {
        $sql = "INSERT INTO tabla_opciones (opcion) VALUES ('$opcion')";
        $conn->query($sql);
    }

    // Insertar datos en la tabla "persona"
    $sql = "INSERT INTO persona (per_nombre, per_documento, per_correo, per_telefono, per_tipo) VALUES ('$nombre', '$documento', '$correo', '$telefono', '$tipo')";

    if ($conn->query($sql) === TRUE) {
        echo "Inserción exitosa";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>

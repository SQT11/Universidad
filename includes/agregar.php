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
    $tipos = $_POST['tipo'];

    // Insertar datos en la tabla "persona"
    $sql = "INSERT INTO persona (per_nombre, per_documento, per_correo, per_telefono, per_tipo) VALUES ('$nombre', '$documento', '$correo', '$telefono', '" . implode(",", $tipos) . "')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../html/2-indexlogin.php");
    exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>

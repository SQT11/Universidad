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

if (isset($_POST['registrar'])) {
    $usuarios = $_POST['usuario'];
    $contrasenas = $_POST['contrasena'];
    $correos = $_POST['correo'];
    $tipos = implode(",", $_POST['tipo']);

    // Insertar datos en la tabla "persona"
    $sql = "INSERT INTO registro (reg_usuario, reg_contrasena, reg_correo, reg_tipo) VALUES ('$usuarios', '$contrasenas', '$correos', '$tipos')";


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

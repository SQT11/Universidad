<?php
include("../core/config.php");
if (isset($_POST['registrar'])) {
    $usuarios = $_POST['usuario'];
    $contrasenas = $_POST['contrasena'];
    $correos = $_POST['correo'];
    $tipos = implode(",", $_POST['tipo']);

    // Insertar datos en la tabla "persona"
    $sql = "INSERT INTO registro (reg_usuario, reg_contrasena, reg_correo, reg_tipo) VALUES ('$usuarios', '$contrasenas', '$correos', '$tipos')";


    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/login.php");
    exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>

<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "Universidad";

// Crear conexión
$conn = new mysqli($servername, $user, $pass, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST['iniciarSesion'])) {
    $usuarios = $_POST['usuario'];
    $contrasenas = $_POST['contrasena'];
}

// Consulta SQL para buscar el usuario en la base de datos
$sql = "SELECT * FROM persona WHERE per_nombre = '$usuarios' AND per_documento = '$contrasenas' ";

$result = $conn->query($sql);

/*
if ($result === false) {
    echo "Error en la consulta: " . $conn->error;
    exit;
}
*/

if ($result->num_rows == 1) {
    // Usuario encontrado, verificar la contraseña
    $row = $result->fetch_assoc();
    if (password_verify($contrasenas, $row['per_documento'])) {
        // Contraseña correcta, iniciar sesión
        session_start();
        $_SESSION['usuario'] = $usuarios;
        // Redireccionar a la página de inicio o a otra página
        header("Location:../html/4-index2.php");
        exit;
    } else {
        // Contraseña incorrecta
        echo "Contraseña incorrecta";
    }
} else {
    // Usuario no encontrado
    echo "Usuario no encontrado";
}
// Cerrar la conexión
$conn->close();
?>
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
$sql = "SELECT * FROM registro WHERE reg_usuario = ?";

// Preparar la consulta
$stmt = $conn->prepare($sql);

// Verificar si hubo un error al preparar la consulta
if (!$stmt) {
    die("Error al preparar la consulta: " . $conn->error);
}

// Vincular parámetros y ejecutar la consulta
$stmt->bind_param("s", $usuarios); // Aquí se pasa la variable $usuarios en lugar del valor directo

if ($stmt->execute()) {
    // Obtener el resultado de la consulta
    $result = $stmt->get_result();
    // Verificar el resultado
    if ($result->num_rows == 1) {
        // Usuario encontrado, verificar la contraseña
        $row = $result->fetch_assoc();
        if ($contrasenas== $row['reg_contrasena']) {
            // Contraseña correcta, iniciar sesión
            session_start();
            $_SESSION['reg_usuario'] = $usuarios;
            // Redireccionar a la página de inicio o a otra página
            header("Location: ../html/4_index2.php");
            exit;
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta";
        }
    } else {
        // Usuario no encontrado
        echo "Usuario no encontrado";
    }
} else {
    // Error al ejecutar la consulta
    echo "Error al ejecutar la consulta: " . $stmt->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>

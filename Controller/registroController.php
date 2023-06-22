<?php
require_once '../core/config.php';
require_once '../Models/registroModel.php';

class RegisterController {
    private $registerModel;
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->registerModel = new RegisterModel($this->conn);
    }

    public function register($username, $password, $email, $types) {
        if ($this->registerModel->insertData($username, $password, $email, $types)) {
            header("Location: ../views/login.php");
            exit;
        } else {
            echo "Error al insertar datos";
        }
    }
}

// Establecer conexión a la base de datos
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Ejemplo de uso
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registrar'])) {
    $username = $_POST['usuario'];
    $password = $_POST['contrasena'];
    $email = $_POST['correo'];
    $types = implode(",", $_POST['tipo']);

    $registerController = new RegisterController($conn);
    $registerController->register($username, $password, $email, $types);
}

// Cerrar la conexión
$conn->close();
?>

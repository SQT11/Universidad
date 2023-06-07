<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Universidad";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Datos para la inserción


    $nombre = "John Doe";
    $documento = "1234";
    $correo = "johndoe@example.com";
    $telefono = "123456789";
    $tipo = "prueba";

    // Consulta de inserción
    $sql = "INSERT INTO persona (per_nombre, per_documento ,per_correo, per_telefono,per_tipo) VALUES (:nombre, :documento, :correo, :telefono, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':documento', $documento);
    $stmt->bindParam(':correo', $email);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':tipo', $tipo);

    if ($stmt->execute()) {
        echo "Inserción exitosa";
    } else {
        echo "Error al insertar datos";
    }
} catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

// Cerrar la conexión
$conn = null;
?>
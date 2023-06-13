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
    $nombres = $_POST['nombre'];
    $documentos = $_POST['documento'];
    $correos = $_POST['correo'];
    $telefonos = $_POST['telefono'];
    $opciones = implode(",", $_POST['opcion']);

    // Insertar datos en la tabla "persona"
    $sql = "INSERT INTO persona (per_nombre, per_documento, per_correo, per_telefono, per_tipo) VALUES ('$nombres', '$documentos', '$correos', '$telefonos', '$opciones')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos agregados";
        header("Location: ../html/5_indexPersona.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Verificar si se ha enviado el formulario con el botón "Actualizar"
if (isset($_POST['actualizar'])) {
    // Obtener los datos del formulario
    $idpersona = $_POST['idpersona'];
    $nombres = $_POST['nombre'];
    $documentos = $_POST['documento'];
    $correos = $_POST['correo'];
    $telefonos = $_POST['telefono'];
    $opciones = implode(",", $_POST['opcion']);

    // Actualizar los datos en la tabla "persona"
    $sql = "UPDATE persona SET per_nombre='$nombres', per_documento='$documentos', per_correo='$correos', per_telefono='$telefonos', per_tipo='$opciones' WHERE per_id='$idpersona'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Datos actualizados";
        // Redireccionar a la página principal u otra ubicación deseada
        header("Location: ../html/5_indexPersona.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al actualizar datos: " . $conn->error;
    }
}



// Verificar si se ha enviado el formulario con el botón "Eliminar"
if (isset($_POST['eliminar'])) {
    $idpersona = $_POST['idpersona'];

    // Eliminar los registros relacionados en la tabla "calificacion"
    $sql_calificacion = "DELETE FROM calificacion WHERE per_id='$idpersona'";
    $conn->query($sql_calificacion);

    // Eliminar el registro de la tabla "persona" para el ID especificado
    $sql = "DELETE FROM persona WHERE per_id='$idpersona'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado";
        // Redireccionar a la página principal u otra ubicación deseada
        header("Location: ../html/5_indexPersona.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al eliminar registro: " . $conn->error;
    }
}


// Obtener los datos de la tabla "persona"
$sql = "SELECT * FROM persona";
$result = $conn->query($sql);

$conn->close();
?>

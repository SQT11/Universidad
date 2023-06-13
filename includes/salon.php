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
    $cantidades = $_POST['cantidad'];

    // Insertar datos en la tabla "persona"
    $sql = "INSERT INTO salon (sal_nombre,sal_cantidad) VALUES ('$nombres', '$cantidades')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos agregados";
        header("Location: ../html/7_indexSalon.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Verificar si se ha enviado el formulario con el botón "Actualizar"
if (isset($_POST['actualizar'])) {
    // Obtener los datos del formulario
    $idSalon = $_POST['idSalon'];
    $nombres = $_POST['nombre'];
    $cantidades = $_POST['cantidad'];

    // Actualizar los datos en la tabla "persona"
    $sql = "UPDATE salon SET sal_nombre='$nombres', sal_cantidad='$cantidades' WHERE sal_id='$idSalon'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Datos actualizados";
        // Redireccionar a la página principal u otra ubicación deseada
        
        header("Location: ../html/7_indexSalon.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al actualizar datos: " . $conn->error;
    }
}



// Verificar si se ha enviado el formulario con el botón "Eliminar"
if (isset($_POST['eliminar'])) {
    $idSalon = $_POST['idSalon'];

    // // Eliminar los registros relacionados en la tabla "calificacion"
    // $sql_calificacion = "DELETE FROM calificacion WHERE per_id='$idSalon'";
    // $conn->query($sql_calificacion);

    // Eliminar el registro de la tabla "persona" para el ID especificado
    $sql = "DELETE FROM salon WHERE sal_id='$idSalon'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado";
        // Redireccionar a la página principal u otra ubicación deseada
        header("Location: ../html/7_indexSalon.php");
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

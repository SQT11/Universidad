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
    $calificaciones = $_POST['calificacion'];
    $porcentajes = $_POST['porcentaje'];

    // Insertar datos en la tabla "persona"
    $sql = "INSERT INTO calificacion (cal_calificacion,cal_porcentaje) VALUES ('$calificaciones', '$porcentajes')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos agregados";
        header("Location: ../html/8_indexCalificacion.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Verificar si se ha enviado el formulario con el botón "Actualizar"
if (isset($_POST['actualizar'])) {
    // Obtener los datos del formulario
    $idCalificaciones = $_POST['idcalificacion'];
    $calificaciones = $_POST['calificacion'];
    $porcentajes = $_POST['porcentaje'];

    // Actualizar los datos en la tabla "persona"
    $sql = "UPDATE calificacion SET cal_calificacion='$calificaciones', cal_porcentaje ='$porcentajes' WHERE cal_id='$idCalificaciones'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Datos actualizados";
        // Redireccionar a la página principal u otra ubicación deseada
        
        header("Location: ../html/8_indexCalificacion.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al actualizar datos: " . $conn->error;
    }
}



// Verificar si se ha enviado el formulario con el botón "Eliminar"
if (isset($_POST['eliminar'])) {
    $idCalificaciones = $_POST['idcalificacion'];


    // Eliminar el registro de la tabla "persona" para el ID especificado
    $sql = "DELETE FROM calificacion WHERE cal_id='$idCalificaciones'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado";
        // Redireccionar a la página principal u otra ubicación deseada
        header("Location: ../html/8_indexCalificacion.php");
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

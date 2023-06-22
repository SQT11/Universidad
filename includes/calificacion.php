<<<<<<< HEAD
<?php
include("../core/config.php");

if (isset($_POST['agregar'])) {
    $calificaciones = $_POST['calificacion'];
    $porcentajes = $_POST['porcentaje'];

    // Insertar datos en la tabla "persona"
    $sql = "INSERT INTO calificacion (cal_calificacion,cal_porcentaje) VALUES ('$calificaciones', '$porcentajes')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos agregados";
        header("Location: ../views/Calificacion.php");
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
        
        header("Location: ../views/Calificacion.php");
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
        header("Location: ../views/Calificacion.php");
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
=======
<?php
include("../core/config.php");

if (isset($_POST['agregar'])) {
    $calificaciones = $_POST['calificacion'];
    $porcentajes = $_POST['porcentaje'];

    // Insertar datos en la tabla "persona"
    $sql = "INSERT INTO calificacion (cal_calificacion,cal_porcentaje) VALUES ('$calificaciones', '$porcentajes')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos agregados";
        header("Location: ../views/Calificacion.php");
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
        
        header("Location: ../views/Calificacion.php");
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
        header("Location: ../views/Calificacion.php");
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
>>>>>>> 7550c26b246f59c94c458812ae285d25448fe213

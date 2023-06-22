<<<<<<< HEAD
<?php
include("../core/config.php");

if (isset($_POST['agregar'])) {
    $nombres = $_POST['nombre'];
    $descripciones = $_POST['descripcion'];
    $facultades = $_POST['facultad'];

    // Insertar datos en la tabla "asignatura"
    $sql = "INSERT INTO asignatura (asig_nombre, asig_descripcion, asig_facultad) VALUES ('$nombres', '$descripciones', '$facultades')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos agregados";
        header("Location: ../views/Asignatura.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Verificar si se ha enviado el formulario con el botón "Actualizar"
if (isset($_POST['actualizar'])) {
    // Obtener los datos del formulario
    $idAsignatura = $_POST['idAsignatura'];
    $nombres = $_POST['nombre'];
    $descripciones = $_POST['descripcion'];
    $facultades = $_POST['facultad'];

    // Actualizar los datos en la tabla "asignatura"
    $sql = "UPDATE asignatura SET asig_nombre='$nombres', asig_descripcion='$descripciones', asig_facultad='$facultades' WHERE asig_id='$idAsignatura'";

    if ($conn->query($sql) === TRUE) {
        echo "Datos actualizados";
        // Redireccionar a la página principal u otra ubicación deseada
        header("Location: ../views/Asignatura.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al actualizar datos: " . $conn->error;
    }
}

// Verificar si se ha enviado el formulario con el botón "Eliminar"
if (isset($_POST['eliminar'])) {
    $idAsignatura = $_POST['idAsignatura'];

    // Eliminar el registro de la tabla "asignatura" para el ID especificado
    $sql = "DELETE FROM asignatura WHERE asig_id='$idAsignatura'";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado";
        // Redireccionar a la página principal u otra ubicación deseada
        header("Location: ../views/Asignatura.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al eliminar registro: " . $conn->error;
    }
}

// Obtener los datos de la tabla "asignatura"
$sql = "SELECT * FROM asignatura";
$result = $conn->query($sql);

$conn->close();
?>
=======
<?php
include("../core/config.php");

if (isset($_POST['agregar'])) {
    $nombres = $_POST['nombre'];
    $descripciones = $_POST['descripcion'];
    $facultades = $_POST['facultad'];

    // Insertar datos en la tabla "asignatura"
    $sql = "INSERT INTO asignatura (asig_nombre, asig_descripcion, asig_facultad) VALUES ('$nombres', '$descripciones', '$facultades')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos agregados";
        header("Location: ../views/Asignatura.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Verificar si se ha enviado el formulario con el botón "Actualizar"
if (isset($_POST['actualizar'])) {
    // Obtener los datos del formulario
    $idAsignatura = $_POST['idAsignatura'];
    $nombres = $_POST['nombre'];
    $descripciones = $_POST['descripcion'];
    $facultades = $_POST['facultad'];

    // Actualizar los datos en la tabla "asignatura"
    $sql = "UPDATE asignatura SET asig_nombre='$nombres', asig_descripcion='$descripciones', asig_facultad='$facultades' WHERE asig_id='$idAsignatura'";

    if ($conn->query($sql) === TRUE) {
        echo "Datos actualizados";
        // Redireccionar a la página principal u otra ubicación deseada
        header("Location: ../views/Asignatura.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al actualizar datos: " . $conn->error;
    }
}

// Verificar si se ha enviado el formulario con el botón "Eliminar"
if (isset($_POST['eliminar'])) {
    $idAsignatura = $_POST['idAsignatura'];

    // Eliminar el registro de la tabla "asignatura" para el ID especificado
    $sql = "DELETE FROM asignatura WHERE asig_id='$idAsignatura'";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado";
        // Redireccionar a la página principal u otra ubicación deseada
        header("Location: ../views/Asignatura.php");
        exit; // Asegura que el script se detenga después de redireccionar
    } else {
        echo "Error al eliminar registro: " . $conn->error;
    }
}

// Obtener los datos de la tabla "asignatura"
$sql = "SELECT * FROM asignatura";
$result = $conn->query($sql);

$conn->close();
?>
>>>>>>> 7550c26b246f59c94c458812ae285d25448fe213

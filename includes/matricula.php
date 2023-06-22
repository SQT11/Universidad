<<<<<<< HEAD
<?php
include("../core/config.php");

// Verificar si se hizo clic en el botón "Agregar"
if (isset($_POST['agregar'])) {
    $idMatricula = $_POST['idmatricula'];
    $asignatura = $_POST['asignatura'];
    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $tipo = $_POST['opcion'];
    $calificacion = $_POST['calificacion'];

    // Realizar la inserción en la tabla "matricula"
    $sql = "INSERT INTO matricula (mat_id) VALUES ('$idMatricula')";
    if ($conn->query($sql) === TRUE) {
        // Obtener el ID de la última inserción
        $lastInsertId = $conn->insert_id;

        // Insertar los datos en la tabla "calificacion"
        $sql = "INSERT INTO calificacion (mat_id, asig_id, cal_calificacion) 
                VALUES ('$lastInsertId', '$asignatura', '$calificacion')";
        if ($conn->query($sql) === TRUE) {
            // Insertar los datos en la tabla "persona"
            $sql = "INSERT INTO persona (per_documento, per_correo, per_telefono, per_tipo) 
                    VALUES ('$documento', '$correo', '$telefono', '$tipo')";
            if ($conn->query($sql) === TRUE) {
                echo "Datos agregados correctamente.";
                header("Location: ../views/Matricula.php");
                exit; // Asegura que el script se detenga después de redireccionar
            } else {
                echo "Error al agregar los datos en la tabla 'persona': " . $conn->error;
            }
        } else {
            echo "Error al agregar los datos en la tabla 'calificacion': " . $conn->error;
        }
    } else {
        echo "Error al agregar los datos en la tabla 'matricula': " . $conn->error;
    }
}

// Verificar si se hizo clic en el botón "Actualizar"
if (isset($_POST['actualizar'])) {
    // Obtener los datos del formulario
    $idMatricula = $_POST['idmatricula'];
    $asignatura = $_POST['asignatura'];
    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $tipo = $_POST['opcion'];
    $calificacion = $_POST['calificacion'];

    // Actualizar los datos en la tabla "matricula"
    $sql = "UPDATE matricula SET mat_id = '$idMatricula' WHERE mat_id = '$idMatricula'";
    if ($conn->query($sql) === TRUE) {
        // Actualizar los datos en la tabla "calificacion"
        $sql = "UPDATE calificacion SET asig_id = '$asignatura', cal_calificacion = '$calificacion' WHERE mat_id = '$idMatricula'";
        if ($conn->query($sql) === TRUE) {
            // Actualizar los datos en la tabla "persona"
            $sql = "UPDATE persona SET per_documento = '$documento', per_correo = '$correo', per_telefono = '$telefono', per_tipo = '$tipo' WHERE per_id = '$nombre'";
            if ($conn->query($sql) === TRUE) {
                echo "Datos actualizados correctamente.";
                header("Location: ../html/9_indexMatricula.php");
                exit; // Asegura que el script se detenga después de redireccionar
            } else {
                echo "Error al actualizar los datos en la tabla 'persona': " . $conn->error;
            }
        } else {
            echo "Error al actualizar los datos en la tabla 'calificacion': " . $conn->error;
        }
    } else {
        echo "Error al actualizar los datos en la tabla 'matricula': " . $conn->error;
    }
}

// Verificar si se hizo clic en el botón "Eliminar"
if (isset($_POST['eliminar'])) {
    $idMatricula = $_POST['idmatricula'];

    // Eliminar los datos de la tabla "calificacion" relacionados con la matricula
    $sql = "DELETE FROM calificacion WHERE mat_id = '$idMatricula'";
    if ($conn->query($sql) === TRUE) {
        // Eliminar los datos de la tabla "persona" relacionados con la matricula
        $sql = "DELETE FROM persona WHERE per_id IN (SELECT per_id FROM calificacion WHERE mat_id = '$idMatricula')";
        if ($conn->query($sql) === TRUE) {
            // Eliminar los datos de la tabla "matricula"
            $sql = "DELETE FROM matricula WHERE mat_id = '$idMatricula'";
            if ($conn->query($sql) === TRUE) {
                echo "Datos eliminados correctamente.";
                header("Location: ../views/Matricula.php");
                exit; // Asegura que el script se detenga después de redireccionar
            } else {
                echo "Error al eliminar los datos de la tabla 'matricula': " . $conn->error;
            }
        } else {
            echo "Error al eliminar los datos de la tabla 'persona': " . $conn->error;
        }
    } else {
        echo "Error al eliminar los datos de la tabla 'calificacion': " . $conn->error;
    }
}

$conn->close();
?>
=======
<?php
include("../core/config.php");

// Verificar si se hizo clic en el botón "Agregar"
if (isset($_POST['agregar'])) {
    $idMatricula = $_POST['idmatricula'];
    $asignatura = $_POST['asignatura'];
    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $tipo = $_POST['opcion'];
    $calificacion = $_POST['calificacion'];

    // Realizar la inserción en la tabla "matricula"
    $sql = "INSERT INTO matricula (mat_id) VALUES ('$idMatricula')";
    if ($conn->query($sql) === TRUE) {
        // Obtener el ID de la última inserción
        $lastInsertId = $conn->insert_id;

        // Insertar los datos en la tabla "calificacion"
        $sql = "INSERT INTO calificacion (mat_id, asig_id, cal_calificacion) 
                VALUES ('$lastInsertId', '$asignatura', '$calificacion')";
        if ($conn->query($sql) === TRUE) {
            // Insertar los datos en la tabla "persona"
            $sql = "INSERT INTO persona (per_documento, per_correo, per_telefono, per_tipo) 
                    VALUES ('$documento', '$correo', '$telefono', '$tipo')";
            if ($conn->query($sql) === TRUE) {
                echo "Datos agregados correctamente.";
                header("Location: ../views/Matricula.php");
                exit; // Asegura que el script se detenga después de redireccionar
            } else {
                echo "Error al agregar los datos en la tabla 'persona': " . $conn->error;
            }
        } else {
            echo "Error al agregar los datos en la tabla 'calificacion': " . $conn->error;
        }
    } else {
        echo "Error al agregar los datos en la tabla 'matricula': " . $conn->error;
    }
}

// Verificar si se hizo clic en el botón "Actualizar"
if (isset($_POST['actualizar'])) {
    // Obtener los datos del formulario
    $idMatricula = $_POST['idmatricula'];
    $asignatura = $_POST['asignatura'];
    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $tipo = $_POST['opcion'];
    $calificacion = $_POST['calificacion'];

    // Actualizar los datos en la tabla "matricula"
    $sql = "UPDATE matricula SET mat_id = '$idMatricula' WHERE mat_id = '$idMatricula'";
    if ($conn->query($sql) === TRUE) {
        // Actualizar los datos en la tabla "calificacion"
        $sql = "UPDATE calificacion SET asig_id = '$asignatura', cal_calificacion = '$calificacion' WHERE mat_id = '$idMatricula'";
        if ($conn->query($sql) === TRUE) {
            // Actualizar los datos en la tabla "persona"
            $sql = "UPDATE persona SET per_documento = '$documento', per_correo = '$correo', per_telefono = '$telefono', per_tipo = '$tipo' WHERE per_id = '$nombre'";
            if ($conn->query($sql) === TRUE) {
                echo "Datos actualizados correctamente.";
                header("Location: ../html/9_indexMatricula.php");
                exit; // Asegura que el script se detenga después de redireccionar
            } else {
                echo "Error al actualizar los datos en la tabla 'persona': " . $conn->error;
            }
        } else {
            echo "Error al actualizar los datos en la tabla 'calificacion': " . $conn->error;
        }
    } else {
        echo "Error al actualizar los datos en la tabla 'matricula': " . $conn->error;
    }
}

// Verificar si se hizo clic en el botón "Eliminar"
if (isset($_POST['eliminar'])) {
    $idMatricula = $_POST['idmatricula'];

    // Eliminar los datos de la tabla "calificacion" relacionados con la matricula
    $sql = "DELETE FROM calificacion WHERE mat_id = '$idMatricula'";
    if ($conn->query($sql) === TRUE) {
        // Eliminar los datos de la tabla "persona" relacionados con la matricula
        $sql = "DELETE FROM persona WHERE per_id IN (SELECT per_id FROM calificacion WHERE mat_id = '$idMatricula')";
        if ($conn->query($sql) === TRUE) {
            // Eliminar los datos de la tabla "matricula"
            $sql = "DELETE FROM matricula WHERE mat_id = '$idMatricula'";
            if ($conn->query($sql) === TRUE) {
                echo "Datos eliminados correctamente.";
                header("Location: ../views/Matricula.php");
                exit; // Asegura que el script se detenga después de redireccionar
            } else {
                echo "Error al eliminar los datos de la tabla 'matricula': " . $conn->error;
            }
        } else {
            echo "Error al eliminar los datos de la tabla 'persona': " . $conn->error;
        }
    } else {
        echo "Error al eliminar los datos de la tabla 'calificacion': " . $conn->error;
    }
}

$conn->close();
?>
>>>>>>> 7550c26b246f59c94c458812ae285d25448fe213

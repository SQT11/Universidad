<?php
class PersonaController {
    private $personaModel;
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->personaModel = new PersonaModel($this->conn);
    }

    public function agregarPersona($data) {
        $nombres = $data['nombre'];
        $documentos = $data['documento'];
        $correos = $data['correo'];
        $telefonos = $data['telefono'];
        $opciones = implode(",", $data['opcion']);

        if ($this->personaModel->insertData($nombres, $documentos, $correos, $telefonos, $opciones)) {
            echo "Datos agregados";
            header("Location: ../views/Persona.php");
            exit; // Asegura que el script se detenga después de redireccionar
        } else {
            echo "Error al insertar datos";
        }
        
    }

    public function actualizarPersona($data) {
        $idpersona = $data['idpersona'];
        $nombres = $data['nombre'];
        $documentos = $data['documento'];
        $correos = $data['correo'];
        $telefonos = $data['telefono'];
        $opciones = implode(",", $data['opcion']);

        if ($this->personaModel->updateData($idpersona, $nombres, $documentos, $correos, $telefonos, $opciones)) {
            echo "Datos actualizados";
            header("Location: ../views/Persona.php");
            exit; // Asegura que el script se detenga después de redireccionar
        } else {
            echo "Error al actualizar datos";
        }
    }

    public function eliminarPersona($idpersona) {
        if ($this->personaModel->deleteData($idpersona)) {
            echo "Registro eliminado";
            header("Location: ../views/Persona.php");
            exit; // Asegura que el script se detenga después de redireccionar
        } else {
            echo "Error al eliminar registro";
        }
    }

    public function obtenerPersonas() {
        return $this->personaModel->getAllData();
    }
}
?>

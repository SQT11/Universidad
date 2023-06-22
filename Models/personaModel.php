<?php
class PersonaModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insertData($nombres, $documentos, $correos, $telefonos, $opciones) {
        $query = "INSERT INTO Persona (per_nombre, per_documento, per_correo, per_telefono, per_tipo)
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssss", $nombres, $documentos, $correos, $telefonos, $opciones);

        return $stmt->execute();
    }

    public function updateData($idpersona, $nombres, $documentos, $correos, $telefonos, $opciones) {
        $query = "UPDATE Persona
                  SET per_nombre = ?, per_documento = ?, per_correo = ?, per_telefono = ?, per_tipo = ?
                  WHERE per_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssssi", $nombres, $documentos, $correos, $telefonos, $opciones, $idpersona);

        return $stmt->execute();
    }

    public function deleteData($idpersona) {
        $query = "DELETE FROM Persona WHERE per_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $idpersona);

        return $stmt->execute();
    }

    public function getAllData() {
        $query = "SELECT * FROM Persona";
        $result = $this->conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }
}
?>

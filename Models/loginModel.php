<?php
class UserModel {
    private $db;

    public function __construct() {
        $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
        if (!$this->db) {
            die("Error de conexión a la base de datos: " . mysqli_connect_error());
        }
    }
    

    public function getUserByUsername($username) {
        $query = "SELECT * FROM registro WHERE reg_usuario = ?";
        $stmt = $this->db->prepare($query);
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $this->db->error);
        }
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            return $user;
        } else {
            return null;
        }
    }
    
    // Otros métodos relacionados con usuarios (crear, actualizar, eliminar, etc.)
}
?>

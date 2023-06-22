<?php
class RegisterModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertData($username, $password, $email, $types) {
        $sql = "INSERT INTO registro (reg_usuario, reg_contrasena, reg_correo, reg_tipo) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssss", $username, $password, $email, $types);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
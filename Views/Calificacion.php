<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/DemasEstilos.css">
    <title>Calificaciones</title>
</head>

<body>
      <nav>
        <div class="profile-pic">
            <img src="../Fotos/Logo.jpg" alt="Foto de perfil">
        </div>
        <ul>
          <li><a href="../index.php">Home</a></li>
            <li><a href="http://localhost/Universidad/views/Persona.php">Persona</a></li>
            <li><a href="http://localhost/Universidad/views/Asignatura.php">Asignatura</a></li>
            <li><a href="http://localhost/Universidad/views/Salon.php">Salón</a></li>
            <li><a href="http://localhost/Universidad/views/Calificacion.php">Calificacion</a></li>
            <li><a href="http://localhost/Universidad/views/Matricula.php">Matricula</a></li>
        </ul>
        <div class="login-btn">
            <a class="btn-login" href="http://localhost/Universidad/views/login.php">Iniciar sesión</a>
        </div>
     </nav>


    <div class="formulario">
      <form action="../includes/calificacion.php" method="POST">
        <!-- Aquí van los campos del formulario -->
        <input type="text" name="idcalificacion" placeholder="ID Calificacion">
        <input type="text" name="calificacion" placeholder="Calificación"  require>
        <input type="text" name="porcentaje" placeholder="Porcentaje"require>
      
        <div class="boton">
          <button class="agregar" name="agregar">Agregar</button>
          <button class="actualizar" name="actualizar">Actualizar</button>
          <button class="eliminar" name="eliminar">Eliminar</button>
        </div>
      </form>
    </div>
    
    <div class="content">
        <div class="table-container">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Calificacion</th>
                  <th>Porcentaje</th>
                </tr>
              </thead>
              <tbody>
                
              <?php
                    // Conectar a la base de datos
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "Universidad";
                    
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }
                    
                    // Obtener los datos de la tabla "persona"
                    $sql = "SELECT * FROM calificacion";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["cal_id"] . "</td>";
                            echo "<td>" . $row["cal_calificacion"] . "</td>";
                            echo "<td>" . $row["cal_porcentaje"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No hay registros</td></tr>";
                    }

                    $conn->close();
                ?>
              </tbody>
            </table>
          </div>
          
        
    </div>
    <footer class="footer">
        <p>&copy; 2023 - Todos los derechos reservados</p>
    </footer>
</body>

</html>

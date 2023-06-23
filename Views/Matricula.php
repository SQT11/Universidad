<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/DemasEstilos.css">
    <title>Matriulas</title>
</head>

<body>
<nav>
        <div class="profile-pic">
            <img src="../Fotos/Logo.jpg" alt="Foto de perfil">
        </div>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="http://localhost/Universidad/Views/Persona.php">Persona</a></li>
            <li><a href="http://localhost/Universidad/Views/Asignatura.php">Asignatura</a></li>
            <li><a href="http://localhost/Universidad/Views/Salon.php">Salón</a></li>
            <li><a href="http://localhost/Universidad/Views/Calificacion.php">Calificacion</a></li>
            <li><a href="http://localhost/Universidad/Views/Matricula.php">Matricula</a></li>
        </ul>
        <div class="login-btn">
            <a class="btn-login" href="http://localhost/Universidad/Views/login.php">Iniciar sesión</a>
        </div>
    </nav>


    <div class="formulario">
      <form action="../includes/matricula.php" method="POST">
        <!-- Aquí van los campos del formulario -->
        <input type="text" name="idmatricula" placeholder="ID Matricula">
        <input type="text" name="asignatura" placeholder="Asignatura"  require>
        <input type="text" name="nombre" placeholder="Nombre"  require>
        <input type="text" name="documento" placeholder="Documento"require>
        <input type="text" name="correo" placeholder="Correo"require>
        <input type="text" name="telefono" placeholder="Telefono"require>
        <select class="dropdown" name="opcion[]" multipe require>
        <option value="">Seleccione una opción</option>
        <option value="Estudiante" >Estudiante</option>
        <option value="Docente">Docente</option>
      </select>
        <input type="text" name="calificacion" placeholder="Calificacion"require>
      
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
                  <th>Asignatura</th>
                  <th>Nombre</th>
                  <th>Documento</th>
                  <th>Correo</th>
                  <th>Telefono</th>
                  <th>Tipo</th>
                  <th>Calificación</th>
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

              // Obtener los datos de la tabla "matricula" y las tablas relacionadas
              
            $sql = "SELECT m.mat_id,a.asig_nombre, p.per_nombre, p.per_documento, p.per_correo, p.per_telefono, p.per_tipo, c.cal_calificacion
            FROM calificacion AS c
            INNER JOIN persona AS p ON c.per_id = p.per_id
            INNER JOIN asignatura AS a ON a.asig_id = c.asig_id
            INNER JOIN matricula AS m ON m.mat_id = c.mat_id
            ORDER BY c.cal_calificacion DESC";



              $result = $conn->query($sql);

                              
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["mat_id"] . "</td>";
                        echo "<td>" . $row["asig_nombre"] . "</td>";
                        echo "<td>" . $row["per_nombre"] . "</td>";
                        echo "<td>" . $row["per_documento"] . "</td>";
                        echo "<td>" . $row["per_correo"] . "</td>";
                        echo "<td>" . $row["per_telefono"] . "</td>";
                        echo "<td>" . $row["per_tipo"] . "</td>";
                        echo "<td>" . $row["cal_calificacion"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No hay registros</td></tr>";
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

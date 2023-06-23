<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/DemasEstilos.css">
    <title>Asignaturas</title>
</head>

<body>
<nav>
        <div class="profile-pic">
            <img src="../Fotos/Logo.jpg" alt="Foto de perfil">
        </div>
        <ul>
          <li><a href="../index.php">Home</a></li>
            <li><a href="/Views/Persona.php">Persona</a></li>
            <li><a href="/Views/Asignatura.php">Asignatura</a></li>
            <li><a href="/Views/Salon.php">Salón</a></li>
            <li><a href="/V/iews/Calificacion.php">Calificacion</a></li>
            <li><a href="/Views/Matricula.php">Matricula</a></li>
        </ul>
        <div class="login-btn">
            <a class="btn-login" href="/Views/login.php">Iniciar sesión</a>
        </div>
    </nav>

    <div class="formulario">
      <form action="../includes/asignatura.php" method="POST">
        <!-- Aquí van los campos del formulario -->
        <input type="text" name="idAsignatura" placeholder="ID Asignatura">
        <input type="text" name="nombre" placeholder="Nombre"  require>
        <input type="text" name="descripcion" placeholder="Descripcion"require>
        <input type="text" name="facultad" placeholder="facultad" require>
      
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
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Facultad</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include_once("../core/config.php");
                      // Obtener los datos de la tabla "persona"
                    $sql = "SELECT * FROM asignatura";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["asig_id"] . "</td>";
                            echo "<td>" . $row["asig_nombre"] . "</td>";
                            echo "<td>" . $row["asig_descripcion"] . "</td>";
                            echo "<td>" . $row["asig_facultad"] . "</td>";
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

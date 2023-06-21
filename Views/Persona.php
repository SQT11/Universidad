<?php
      include("../core/config.php");
?>


<!DOCTYPE html>
<html lang="es-ES">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/DemasEstilos.css">
  <title>Personas</title>
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
  <form action="../includes/persona.php" method="POST">
     <!-- Aquí van los campos del formulario -->
     <input type="text" name="idpersona" placeholder="ID Persona">
    <input type="text" name="nombre" placeholder="Nombre"  require>
    <input type="number" name="documento" placeholder="Documento"require>
    <input type="email" name="correo" placeholder="Correo electrónico" require>
    <input type="tel" name="telefono" placeholder="Teléfono" require>
    <select class="dropdown" name="opcion[]" multipe require>
      <option value="">Seleccione una opción</option>
      <option value="Estudiante" >Estudiante</option>
      <option value="Docente">Docente</option>
    </select>

    <div class="boton">
      <button class="agregar" name="agregar">Agregar</button>
      <button class="actualizar" name="actualizar">Actualizar</button>
      <button class="eliminar" name="eliminar">Eliminar</button>
    </div>
  </form>
</div>

  </div>
  
  <div class="content">
    <div class="table-container">
      <table class="table">
        <thead>
          <tr>
          <th>ID</th>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Tipo</th>
          </tr>
        </thead>
        <tbody>
        <?php
      // Conectar a la base de datos
      include("../core/config.php");
      
      // Obtener los datos de la tabla "persona"
      $sql = "SELECT * FROM persona";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["per_id"] . "</td>";
              echo "<td>" . $row["per_nombre"] . "</td>";
              echo "<td>" . $row["per_documento"] . "</td>";
              echo "<td>" . $row["per_correo"] . "</td>";
              echo "<td>" . $row["per_telefono"] . "</td>";
              echo "<td>" . $row["per_tipo"] . "</td>";
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

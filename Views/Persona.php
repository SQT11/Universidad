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
      <li><a href="/Views/Persona.php">Persona</a></li>
      <li><a href="/Views/Asignatura.php">Asignatura</a></li>
      <li><a href="/Views/Salon.php">Salón</a></li>
      <li><a href="/Views/Calificacion.php">Calificacion</a></li>
      <li><a href="/Views/Matricula.php">Matricula</a></li>
    </ul>
    <div class="login-btn">
      <a class="btn-login" href="/Views/login.php">Iniciar sesión</a>
    </div>
  </nav>

  <div class="formulario">
    <form action="../Controller/PersonaController.php" method="POST">
      <!-- Aquí van los campos del formulario -->
      <input type="text" name="idpersona" placeholder="ID Persona">
      <input type="text" name="nombre" placeholder="Nombre" required>
      <input type="number" name="documento" placeholder="Documento" required>
      <input type="email" name="correo" placeholder="Correo electrónico" required>
      <input type="tel" name="telefono" placeholder="Teléfono" required>
      <select class="dropdown" name="opcion[]">
        <option value="">Seleccione una opción</option>
        <option value="Estudiante">Estudiante</option>
        <option value="Docente">Docente</option>
      </select>

      <div class="boton">
      <button class="agregar" name="agregar" value="Agregar">Agregar</button>
      <button class="actualizar" name="actualizar" value="Actualizar">Actualizar</button>
      <button class="eliminar" name="eliminar" value="Eliminar">Eliminar</button>

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
            <th>Documento</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Tipo</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once("../core/config.php");
          include("../Models/personaModel.php");
          // Crear una instancia de PersonaModel y pasar la conexión como parámetro al constructor
          $personaModel = new PersonaModel($conn);
          // Obtener todos los datos de las personas
          $personas = $personaModel->getAllData();

          // Recorrer los datos y generar las filas de la tabla
          foreach ($personas as $persona) {
            echo "<tr>";
            echo "<td>" . $persona['per_id'] . "</td>";
            echo "<td>" . $persona['per_nombre'] . "</td>";
            echo "<td>" . $persona['per_documento'] . "</td>";
            echo "<td>" . $persona['per_correo'] . "</td>";
            echo "<td>" . $persona['per_telefono'] . "</td>";
            echo "<td>" . $persona['per_tipo'] . "</td>";
            echo "</tr>";
          }

          // Cerrar la conexión a la base de datos
          $conn->close();
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>

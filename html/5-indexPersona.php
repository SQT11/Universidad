<!DOCTYPE html>
<html lang="es-ES">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/Proyeccto_Universidad/css/5-indexPersona.css">
  <title>Personas</title>
</head>

<body>
  <nav>
    <div class="profile-pic">
      <img src="/Proyeccto_Universidad/Fotos/Logo.jpg" alt="Foto de perfil">
    </div>
    <ul>
      <li><a href="http://127.0.0.1:5500/html/1-index.html">Home</a></li>
      <li><a href="">Estudiantes</a></li>
      <li><a href="">Docentes</a></li>
      <li><a href="">Asignatura</a></li>
      <li><a href="">Salón</a></li>
      <li><a href="">Calificacion</a></li>
      <li><a href="">Matricula</a></li>
    </ul>
    <div class="login-btn">
      <a class="btn-login" href="http://127.0.0.1:5500/html/2-indexlogin.html">Iniciar sesión</a>
    </div>
  </nav>

  <div class="content">
    <div class="table-container">
      <table class="table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Tipo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td> </td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td> </td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td> </td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td> </td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="button-container">
      <button class="button" id="agregar">Agregar</button>
      <button class="button" id="actualizar">Actualizar</button>
      <button class="button" id="eliminar">Eliminar</button>
      <button class="button" id="buscar">Buscar</button>
    </div>
  </div>

  <div id="popupForm" style="display: none;" class="popup">
    <h2>Formulario</h2>
    <form>
      <!-- Aquí van los campos del formulario -->
      <input type="text" name="nombre" id="" placeholder="Nombre">
      <input type="number" name="documento" id="" placeholder="Documento">
      <input type="email" name="correo" placeholder="Correo electrónico">
      <input type="tel" name="telefono" placeholder="Telefono">
      <select name="op" id="">
        <option value="">Opcion</option>
        <option value="">Opcion</option>
        <option value="">Opcion</option>
        <option value="">Opcion</option>
      </select>
      <button type="submit">Enviar</button>
    </form>
  </div>
  <footer class="footer">
    <p>&copy; 2023 - Todos los derechos reservados</p>
  </footer>
  <script src="../JavaScript/5-Persona.js"></script>
</body>

</html>
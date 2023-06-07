<!DOCTYPE html>
<html lang="ES-es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Universidad/css/3-indexRegister.css">
    <title>Proyecto Universidad</title>
</head>

<body>
    <nav>
        <div class=" profile-pic">
    <img src="../Fotos/Logo.jpg" alt="Foto de perfil">
    </div>
    <ul>
        <li><a href="1_index.html">Home</a></li>
    </ul>
    <div class="login-btn">
        <a class="btn-login" href="#">Iniciar sesión</a>
    </div>
    </nav>
    <form action="../includes/agregar.php" method="POST">
        <div class="content">
            <div class="content-2">
                <div class="label">
                    <label for="name">Datos Personales de la Persona</label>
                </div>

                <label for="name">Tipo</label>
                <select class="dropdown" name="tipo[]" multipe>
                    <option> </option>
                    <option value="opcion1">Estudiante</option>
                    <option value="opcion2">Docente</option>
                </select>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Ingrese su usuario" class="input" name="nombre">
                <label for="documento">Documento</label>
                <input type="text" placeholder="Ingrese Documento" class="input" name="documento">
                <label for="correo">Correo</label>
                <input type="text" placeholder="Correo Electronico" class="input" name="correo">
                <label for="telefono">Telefono</label>
                <input type="text" placeholder="Telefono" class="input" name="telefono">
                <button type="submit" name="agregar" value="agregar">Registrarse</button>
            </div>
        </div>
    </form>

    <footer>
        <p>&copy; 2023 - Todos los derechos reservados</p>
    </footer>
    </body>

</html>


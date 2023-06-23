<!DOCTYPE html>
<html lang="ES-es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/Register.css">
    <title>Proyecto Universidad</title>
</head>

<body>
    <nav>
        <div class=" profile-pic">
    <img src="../Fotos/Logo.jpg" alt="Foto de perfil">
    </div>
    <ul>
        <li><a href="/Views/Home.php">Home</a></li>
    </ul>
    <div class="login-btn">
        <a class="btn-login" href="/Views/login.php">Iniciar sesión</a>
    </div>
    </nav>
    
    <form action="../Controller/registroController.php" method="POST" >
        <div class="content">
            <div class="content-2">
                <div class="label">
                    <label for="name">Registro</label>
                </div>

                <label for="name">Tipo</label>
                <select class="dropdown" name="tipo[]" multiple>
                    <option> </option>
                    <option value="Estudiante">Estudiante</option>
                    <option value="Docente">Docente</option>
                </select>
                <label for="usuario">Usuario</label>
                <input type="text" placeholder="Ingrese su usuario" class="input" name="usuario">
                <label for="contrasena">Contraseña</label>
                <input type="text" placeholder="Ingrese su contraseña" class="input" name="contrasena">
                <label for="correo">Correo</label>
                <input type="text" placeholder="Correo Electronico" class="input" name="correo">
                <button type="submit" name="registrar" value="registrar">Registrarse</button>
            </div>
        </div>
    </form>

    <footer>
        <p>&copy; 2023 - Todos los derechos reservados</p>
    </footer>
    </body>

</html>


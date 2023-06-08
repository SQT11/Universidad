<!DOCTYPE html>
<html lang="ES-es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/2-indexLogin.css">
    <title>Proyecto Universidad</title>
</head>
<body>
    <nav>
        <div class="profile-pic">
            <img src="../Fotos/Logo.jpg" alt="Foto de perfil">
        </div>
        <ul>
            <li><a href="http://127.0.0.1:5500/1-index.html">Home</a></li>
        </ul>
        <div class="login-btn">
            <a class="btn-login" href="">Iniciar sesión</a>
        </div>
    </nav>

    <form  action="../includes/inicio.php" method="POST">
        <div class="content">
            <div class="content-2">
                <label for="usuario">Usuario</label>
                <input type="text" placeholder="Ingrese su usuario" name="usuario" class="input">
                <label for="contrasena">Contraseña</label>
                <input type="text" placeholder="Ingrese su contraseña" name="contrasena" class="input">
                <label for="name" class="label-opacity"><a href="http://127.0.0.1:5500/3-indexRegister.html">No tienes contraseña? Registrate aquí.</a></label>
                <button type="submit" name="iniciarSesion" value="iniciarSesion" > Iniciar Sesion</button>
            </div>
        </div>

    </form>
    
    <footer>
        <p>&copy; 2023 - Todos los derechos reservados</p>
    </footer>

</body>
</html>


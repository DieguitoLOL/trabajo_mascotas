<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Veterineria LifePet</title>
</head>
<body>
<?php
        require_once __DIR__ . "/vendor/autoload.php";
        use Dotenv\Dotenv; 
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    ?>
<main>
    <section>
        <div>
            <div><img src="img/Logo.png" alt="Logo veterinaria"></div>
            <h6>LifePet</h6>
        </div>
        <div>
            <h1>Registro de Usuario</h1>
            <form  method="POST">    
                <?php    
                    require_once __DIR__ ."/process/procesar_registro.php";
                ?>   
                <label for="Name">Nombre completo</label>
                <input type="text" id="Name" name="Name" required value=""><br>

                <label for="UserName">Nombre de Usuario</label>
                <input type="text" id="UserName" name="UserName" required value=""><br>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required value=""><br>

                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required><br>

                <input name="btRegister" type="submit" value="Registrarse">
            </form>
        </div>
    </section>
    <section>
        <div><img src="img/ImagenGato.jpeg" alt="Imagen gatito"></div>
        <div>
            <h4>LifePet</h4>
            <p>En LifePet, hacemos que las sonrisas de tus mascotas sean nuestra especialidad. Tu confianza, su felicidad.</p>
        </div>
    </section>
</main>

</body>
</html>
<!-- <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./css/style.css">
  <title>Adopta un gatito en tu zona</title>
</head>
<body>
  <div class="login-page">
    <div class="form">
      <div class="login">
        <div class="login-header">
          <h3>Adopta un gatito en tu zona</h3>
          <p>Por favor, ingresa tus credenciales para iniciar sesión.</p>
        </div>
      </div>
      <form class="login-form">
        <input type="text" placeholder="Usuario o correo electrónico" name="uname" required>
        <input type="password" placeholder="Contraseña" name="psw" required>
        <button>Iniciar sesión</button>
        <p class="message">¿No estás registrado? <a href="#">Crea una cuenta</a></p>
      </form>
    </div>
  </div>
</body>
</html> -->

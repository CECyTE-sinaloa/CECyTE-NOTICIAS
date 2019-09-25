<?php
    
    require "code-login.php";

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="shortcut icon" href="CE.png">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
  </head>
<body>
    <div class="contenedor">
      <header>
        <h1 class="title">CECyTE NOTICIAS</h1>
        <a href="register.php">Registrate</a>
      </header>
      <div class="login">
        <article class="fondo">
          <img src="img/men.jpg" alt="User">
          <h3>Inicio de Sesión</h3>
         <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <span class="icon-user"></span><input class="inp" type="text" name="email" value=""><br>
            <span class="msg-error"><?php echo $email_err; ?></span>
            <span class="icon-key"></span><input class="inp" type="password" name="pass" value=""><br>
            <span class="msg-error"><?php echo $password_err; ?></span>
            <input class="boton" type="submit" name="inicio" value="Iniciar Sesión">
          </form>
        </article>
      </div>
    </div>
</body>
</html>


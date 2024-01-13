<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="registro.css">

</head>
<body>
        
    <form method="post" autocomplete="off" >
         <div class="formulario">
             <h1>REGISTRO </h1>

            <div class="username">
                 <input  type="text" name="name" placeholder=" "  >
                <label>nombre de usuario</label>
             </div>

            <div class="contrasena">
                 <input type="password" name="password"  placeholder=" ">
                 <label>Contraseña</label>
             </div>
             <div class="t_c">
                 <a href="inicio_de_sesion.html" class="terms-link">iniciar sesion</a>
                 <input type="submit" name="send" class="btn" value="registrarse">
             </div>
        </div>
    </form>
    <?php
    include("send.php")
    ?>

</body>
</html>
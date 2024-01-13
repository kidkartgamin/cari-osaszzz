<?php
    $usuario=$_POST['name'];
    $contraseña=$_POST['password'];
    session_start();
    $_SESSION['username']=$usuario;

    $conex=mysqli_connect("localhost", "root", "", "formulario" );

    $consulta="SELECT*FROM datos WHERE nombre ='".$usuario."' AND contraseña ='".$contraseña."'";
    $resultado=mysqli_query($conex,$consulta);

    $filas=mysqli_num_rows($resultado);
    
    if($filas){
        header("location:pagina_principal.php");
    }else{
        ?>
        <?php
        include("index.html");
        ?>
        <h1>class="bad"Error en el inicio de sesión</h1>
        <?php

    }
    
    mysqli_free_result($resultado);

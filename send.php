<?php
    include("conexion.php");
    if(isset($_POST['send'])){

        if(
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['password']) >= 1
        )   {
        
            $name = trim($_POST['name']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre,contraseña,fecha)
                        VALUES('$name','$password','$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
?>
                <h3 class="succes"> tu registro se ha completado </h3>
<?php
            } else {
?>
                <h3 class="error"> ocurrió un error </h3>
<?php
            }
        } else {
?>
            <h3 class="error"> llena todos los campos </h3>
<?php
        }
    }
?>

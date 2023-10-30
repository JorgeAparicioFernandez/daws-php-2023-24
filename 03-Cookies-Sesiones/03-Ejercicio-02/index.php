<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03-Ejercicio-01</title>
</head>
<body>

    <form action="guardar_usuario.php" method="post">

        <label><b>Introduce el usuario a almacenar:</b>
        <input type="text" name="usuario" id="usuario" required> <input type="submit" value="Guardar"></label><br>
        <input type="button" name="borrarUser" id="borrarUser">

    </form>

    <?php

    if(isset($_POST['usuario']))
    {
        $usuario = $_POST['usuario'];
        setcookie("usuario", $usuario);
       
    };

    if(isset($_COOKIE['usuario'])) {
        $user = $_COOKIE['usuario'];
        echo "<label id='ultimoUsuario'>Último usuario almacenado: $user</label>";
    }

    ?>

</body>
</html>
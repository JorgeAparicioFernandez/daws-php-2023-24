<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-17</title>
</head>
<body>
    
<?php 

$user = $_GET['user'];
$password = $_GET['password'];

$usuarios = 
[
    "Jorge5a5" => 
    [
        "Nombre"   => "Jorge",
        "Password" => "hola",
        "Email"    => "jorge.aparicio@ikasle,egibide.org"
    ],

    "Alex777" => 
    [
        "Nombre"   => "Alex",
        "Password" => "HolaMundo",
        "Email"    => "alex.duran@ikasle,egibide.org"
    ]
];

function validarUsuario(&$usuarios,$user,$password)
{

    if (array_key_exists($user, $usuarios)) {
        if ($password == $usuarios[$user]["Password"]) {
            return "Bienvenido $user.";
        }else
        {
            return "El usuario y Contraseña no coinciden.";
        }
    }else
    {
        return "El usuario $user no existe.";
    }

}

require "index.view.php"

?>

</body>
</html>
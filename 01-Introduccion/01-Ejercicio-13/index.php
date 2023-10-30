<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-13</title>
</head>
<body>
    

<?php 

$animales = ["Perro","Gato","Pinguino","Tortuga"];

$colores = ["Negro","Blanco","Verde","Naranja"];

function anadirAnimalFinal(&$animales,$valor)
{

    array_push($animales, $valor);

}

function anadirColorPrincipio(&$colores,$valor)
{

    array_unshift($colores, $valor);

}

function creaTercerArray(&$combinacion, $animales, $colores)
{

$combinacion = array_merge($animales,$colores);

}

require "index.view.php";

?>

</body>
</html>
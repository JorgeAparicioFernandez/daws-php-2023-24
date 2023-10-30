<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-12</title>
</head>
<body>
    
<?php 

$ciudades = ["Paris", "Berlin", "Amsterdam", "Praga"];

function getValor($ciudades,$posicion)
{

    return $ciudades[$posicion];

}

function setValor(&$ciudades,$posicion,$valor)
{

    $ciudades[$posicion] = $valor;

    

}

require "index.view.php"



?>

</body>
</html>
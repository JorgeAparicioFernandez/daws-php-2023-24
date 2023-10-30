<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-10</title>
</head>
<body>

<?php

function concatenar($cadena2, $cadena1 = 'El Atletico de Madrid')
{

    $frase = $cadena1 . " " . $cadena2;

    return $frase;

}

$cadena2 = "va a ganar la Liga EA Sports.";

echo concatenar($cadena2);

?>

</body>
</html>
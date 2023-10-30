<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-09</title>
</head>
<body>
    
<?php

$cadena1 = "El Atletico de Madrid";

$cadena2 = "va a ganar la Liga EA Sports.";

function concatenar($cadena1, $cadena2)
{

    $frase = $cadena1 . " " . $cadena2;

    return $frase;

}

echo concatenar($cadena1,$cadena2);

?>

</body>
</html>
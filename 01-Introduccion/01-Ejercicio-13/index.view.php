<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-13(Vista)</title>
</head>
<body>
    
<?php 

echo "Cantidad de animales: " . count($animales) . "<br>";

echo "Cantidad de colores: " . count($colores) . "<br>";

echo "Vamos a añadir un animal con array_push: <br>";

anadirAnimalFinal($animales,"Tigre");

print_r($animales); echo "<br>";

echo "Vamos a añadir un color con array_unshift: <br>";

anadirColorPrincipio($colores,"Magenta");

print_r($colores); echo "<br>";

echo "Vamos a crear un tercer array con array_merge: <br>";

creaTercerArray($combinacion,$animales,$colores);

print_r($combinacion); echo "<br>";

?>

</body>
</html>
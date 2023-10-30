<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-12(Vista)</title>
</head>
<body>
    
<?php 

echo "La ciudad número 2 es: " . getValor($ciudades, 2) . "<br>";

echo "Cambiamos la ciudad 2 por Vitoria-Gasteiz. <br>";

setValor($ciudades, 2,"Vitoria-Gasteiz") . "<br>";

echo "La ciudad número 2 es: " . getValor($ciudades, 2) . "<br>";
?>

</body>
</html>
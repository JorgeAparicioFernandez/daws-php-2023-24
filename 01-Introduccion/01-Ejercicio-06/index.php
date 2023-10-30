<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-06</title>
</head>
<body>
    
<?php 

$a = $_GET['a'];

$b = $_GET['b'];

function multiplicar($a, $b)
{

    $multiplicacion = $a * $b;

    echo "Resultado de la multiplicación: " . $multiplicacion;

}

multiplicar($a,$b);

?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-07</title>
</head>
<body>
    
<?php 

$a = $_GET['a'];

$b = $_GET['b'];

function multiplicar($a, $b)
{

    $multiplicacion = $a * $b;

    return $multiplicacion;
}

echo "Resultado de la multiplicacion: " . Multiplicar($a,$b);

?>

</body>
</html>
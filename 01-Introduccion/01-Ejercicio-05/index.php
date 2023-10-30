<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-05</title>
</head>
<body>
<?php 

$a = $_GET['a'];

$b = $_GET['b'];

$resta = $a - $b;

echo "Resta: " . $resta . "<br>";

$division = $a / $b;

echo "División: " . $division . "<br>";

$aMayorb = false;
$aMenorIgualb = false;

if($a <= $b)
{

    $aMenorIgualb = true;

}else
{

    $aMayorb = true;

}

echo " ¿A es mayor que B? " . var_export($aMayorb) . "<br>";

echo " ¿A es menor que B? " . var_export($aMenorIgualb) . "<br>";

?>    

</body>
</html>
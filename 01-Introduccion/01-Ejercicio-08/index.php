<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-08</title>
</head>
<body>
<?php 

$a = $_GET['a'];

$b = $_GET['b'];

function esMayor($a, $b)
{

   if ($a > $b)
   {
    
    return true;

   }

    return false;

}

echo " ¿Es el primer número mayor que el segundo? " . var_export(esMayor($a,$b));

?>

</body>
</html>
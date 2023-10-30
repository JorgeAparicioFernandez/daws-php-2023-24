<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-16</title>
</head>
<body>
    

<?php 

$a = $_GET['a'];

$b = $_GET['b'];

function comprobarNum($a,$b)
{

    if ($a == $b) {
        
        return "Son iguales asique multiplico: " . $a * $b;

    }else
    {

        return "Son diferentes asique sumo: " . $a + $b;

    }

}

require "index.view.php"

?>

</body>
</html>
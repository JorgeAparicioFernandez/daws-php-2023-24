<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-21</title>
</head>
<body>
    
<?php

    $num = $_GET['numero'];
    $suma = 0;

    for ($i=0; $i <= $num ; $i++) { 
        
        if ($i%2==0) {

            $suma = $suma + $i;

            if ($suma > 100) {
                $suma = $suma - $i;
            }

        }
        
    }

    require "index.view.php";

?>

</body>
</html>
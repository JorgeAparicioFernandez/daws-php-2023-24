<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-26</title>
</head>
<body>
    
<?php 
    
    function generarHTML()
    {

        $coches = ["Audi","Seat","Mercedes","Volkswagen","BMW","Fiat"];

        $cadena = "<ul>";

        $i = 0;

        do {

            $cadena .= "<li> $coches[$i] </li><br>";
            $i = $i + 1;

        } while (($i < count($coches)));

        $cadena .= "</ul>";

        return $cadena;

    }

    require "index.view.php";

    ?> 

</body>
</html>
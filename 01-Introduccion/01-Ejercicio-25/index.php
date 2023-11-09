<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-25</title>
</head>
<body>
    
<?php 
    
    function generarHTML()
    {

        $estudiantes = ["Ane","Markel","Nora","Danel","Itsana","Izaro"];

        $cadena = "<ul>";

        $i = 0;

        while ($i < count($estudiantes)) {
            $cadena .= "<li> $estudiantes[$i] </li><br>";
            $i = $i + 1;
        }

        $cadena .= "</ul>";

        return $cadena;

    }

    require "index.view.php";

    ?> 

</body>
</html>
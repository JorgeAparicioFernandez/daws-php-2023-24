<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-23</title>
</head>
<body>
    
    <?php 
    
    function generarHTML()
    {

        $estudiantes = ["Ane","Markel","Nora","Danel","Itsana","Izaro"];

        $cadena = "<ul>";

        for ($i=0; $i < count($estudiantes) ; $i++) { 
            $cadena .= "<li id='$i'> $estudiantes[$i] </li><br>";
        }

        $cadena .= "</ul>";

        return $cadena;

    }

    require "index.view.php";

    ?> 

</body>
</html>
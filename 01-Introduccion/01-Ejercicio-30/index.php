<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-30</title>
</head>
<body>
    
<?php 

    function generarHTML()
    {

        $alumnos = [

                "Itsana Velasco"   => "9.5",
                "Jorge Aparicio" => "7.5",
                "Iker Garcia" => "10",
                "Aitor Aostri"    => "5",
                "Unai Marcos" => "0.5",
                "Juan Maria Diaz" => "2.5"

        ];

        $cadena = "<h1>Nota Media de los alumnos de Egibide</h1>";

        foreach ($alumnos as $alumno => $nota) {

            $cadena .= "<li>La nota media de <b>" . $alumno ."</b> es de <b>" . $nota . "</b></li><br>";
        }

        return $cadena;

    }

    require "index.view.php"

?>

</body>
</html>
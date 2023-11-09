<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-</title>
</head>
<style>
    table {
        border-collapse: collapse; /* Combina los bordes de las celdas adyacentes */
        width: 100%; /* Ancho de la tabla al 100% del contenedor */
    }

    th, td {
        border: 1px solid black; /* Define un borde de 1px sólido y negro */
        padding: 8px; /* Espaciado interno alrededor del contenido de las celdas */
    }
</style>
<body>
    
<?php 

    function generarHTML()
    {

        $alumnos = [
        
            [
                "Nombre" => "Itsana",
                "Nota 1" => 8.5,
                "Nota 2" => 9.5,
                "Nota Media"  => calcularMedia(8.5, 9.5)
            ],
            
            [
                "Nombre" => "Jorge",
                "Nota 1" => 7.5,
                "Nota 2" => 10,
                "Nota Media"  => calcularMedia(7.5, 10)
            ],
    
            [
                "Nombre" => "Aitor",
                "Nota 1" => 2.5,
                "Nota 2" => 7,
                "Nota Media"  => calcularMedia(2.5, 7)
            ],
    
            [
                "Nombre" => "Iker",
                "Nota 1" => 7.5,
                "Nota 2" => 4.5,
                "Nota Media"  => calcularMedia(7.5, 4.5)
            ]
        ];

        $cadena = "<table><tr><th>Nombre</th><th>Nota 1</th><th>Nota 2</th><th>Nota Media</th></tr>";

        foreach ($alumnos as $alumno) {
            $cadena .= "<tr>";

            $cadena .= "<td>" . $alumno["Nombre"] . "</td>";

            if ($alumno["Nota 1"] < 5) {
                $cadena .= "<td style='color: red'>" . floatval($alumno["Nota 1"]) . "</td>";
            }else {
                $cadena .= "<td>" . floatval($alumno["Nota 1"])  . "</td>";
            }

            if ($alumno["Nota 2"] < 5) {
                $cadena .= "<td style='color: red'>" . floatval($alumno["Nota 2"]) . "</td>";
            }else {
                $cadena .= "<td>" . floatval($alumno["Nota 2"])  . "</td>";
            }

            if ($alumno["Nota Media"] < 5) {
                $cadena .= "<td style='color: red'>" . floatval($alumno["Nota Media"]) . "</td>";
            }else {
                $cadena .= "<td>" . floatval($alumno["Nota Media"]) . "</td>";
            }

            $cadena .= "</tr>";
        }

        $cadena .= "</table>";

        return $cadena;

    }

    function calcularMedia($nota1, $nota2)
    {

        $notaMedia =  ($nota1 + $nota2) / 2;

        return $notaMedia;

    }

    require "index.view.php"

?>

</body>
</html>
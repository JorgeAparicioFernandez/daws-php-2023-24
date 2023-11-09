<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-24</title>
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

        $agenda = [
        
            [
                "Nombre"   => "Itsana",
                "Apellido" => "Velasco",
                "telefono" => "623456789",
                "email"    => "itsana.velasco@ikasle.egibide.org"
            ],
            
            [
                "Nombre"   => "Jorge",
                "Apellido" => "Aparicio",
                "telefono" => "687654321",
                "email"    => "jorge.aparicio@ikasle.egibide.org"
            ],
    
            [
                "Nombre"   => "Iker",
                "Apellido" => "Garcia",
                "telefono" => "621212343",
                "email"    => "iker.garcia@ikasle.egibide.org"
            ],
    
            [
                "Nombre"   => "Aitor",
                "Apellido" => "Aostri",
                "telefono" => "689752316",
                "email"    => "aitor.aostri@ikasle.egibide.org"
            ],
        ];

        $cadena = "<table><tr><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Email</th></tr>";

        foreach ($agenda as $contacto) {
            $cadena .= "<tr>";
            $cadena .= "<td>" . $contacto["Nombre"] . "</td>";
            $cadena .= "<td>" . $contacto["Apellido"] . "</td>";
            $cadena .= "<td>" . $contacto["telefono"] . "</td>";
            $cadena .= "<td>" . $contacto["email"] . "</td>";
            $cadena .= "</tr>";
        }

        $cadena .= "</table>";

        return $cadena;

    }

    require "index.view.php"

?>

</body>
</html>
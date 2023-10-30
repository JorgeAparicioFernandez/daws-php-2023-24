<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicios-16</title>
</head>
<body>
    

<?php 

$diccionario = 
[

    "Jorge5a5" => 
    [
        "Nombre" => "Jorge",
        "Apellido" => "Aparicio",
        "Email" => "Jorge.aparicio@ikasle.egibide.org"
    ],

    "JonVadi" => 
    [
        "Nombre" => "Jon",
        "Apellido" => "Vadillo",
        "Email" => "jvadillo@egibide.org"
    ],
    
    "Alex777" => 
    [
        "Nombre" => "Alex",
        "Apellido" => "Duran",
        "Email" => "alex.duran@ikasle.egibide.org"
    ],

];

function getDatos($diccionario,$usuario,$valor)
{

    switch($valor)
    {
        case "Nombre":
            {
                return $diccionario[$usuario]["Nombre"];
            }
        case "Apellido":
            {
                return $diccionario[$usuario]["Apellido"];
            }
        case "Email":
            {
                return $diccionario[$usuario]["Email"];
            }
        default:
        {
            return "El valor seleccionado no existe.";
        }
    }

}

require "index.view.php"

?>

</body>
</html>
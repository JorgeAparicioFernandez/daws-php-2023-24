<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-27</title>
</head>
<body>
    <?php
    function generarHTML()
        {

            $grupos = ["Beatles","Queen","Imagine Dragons","Big Time Rush","Los Chunguitos","ABBA"];

            $cadena = "<h1>Grupos de Musica by George</h1>";

            $i = 0;

            foreach ($grupos as $grupo) {
                $cadena .= "<label> $grupo </label><br>";
            }

            return $cadena;

        }

    require "index.view.php";

    ?> 

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-22</title>
</head>
<body>
    
<?php 

function encontrarPosicion($p) 
{

    $paises = ["Brasil","Portugal","Islandia","Mexico","Filipinas","Marruecos"];

 for ($i=0; $i < count($paises); $i++) {

    if ($p === $paises[$i]) {
            return $i -1;
    }
 }

 return -1;

}

require "index.view.php"

?>    

</body>
</html>
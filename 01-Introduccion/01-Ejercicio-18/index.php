<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-18</title>
</head>
<body>
    
<?php 

function diaSemana($num)
{

    switch ($num) {
        case 1:
            return "Lunes";

         case 2:
            return "Martes";
            
            case 3:
            return "Miercoles";
                    
            case 4:
            return "Jueves";
                        
            case 5:
            return "Viernes";
                            
            case 6:
            return "Sabado";
                                
            case 7:
            return "Domingo";
        
        default:
            return "no es ningún dia de la semana";
            
    }

}

require "index.view.php";

?>

</body>
</html>
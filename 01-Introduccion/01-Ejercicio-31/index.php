<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-31</title>
</head>
<body>
    
<?php 

 function generarHTML()
 {

    $numeros = [];

    for ($i=0; $i <= 20 ; $i++) { 
      
       $num = random_int(1,999);
   
       $numeros[] = $num; 

    }

    $cadena = "<ul>" . verArray($numeros) . verNumeroMax($numeros) . verNumeroMin($numeros) . "</ul>";

    return $cadena;

 }

 function verArray($numeros)
 {

    $cadena = "<li>El Array generado es : ";

   foreach ($numeros as $numero) {
        $cadena .= " | " . $numero ." | ";
   }

   $cadena .= "</li><br>";

   return $cadena;

 }

 function verNumeroMax($numeros)
 {

    $numMax = 0;

    foreach ($numeros as $numero) {

       if ($numero > $numMax) {
        $numMax = $numero;
       }

   }

   $cadena = "<li> El valor más alto es " . $numMax . "</li><br>";

   return $cadena;

 }

 Function verNumeroMin($numeros)
 {

    $numMin = 999;

    foreach ($numeros as $numero) {

       if ($numero < $numMin) {
        $numMin = $numero;
       }

   }

   $cadena = "<li> El valor más bajo es " . $numMin . "</li><br>";

   return $cadena;

 }
 
 require "index.view.php"

?>

</body>
</html>
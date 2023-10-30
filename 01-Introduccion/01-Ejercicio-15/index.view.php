<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Ejercicio-15(Vista)</title>
</head>
<body>
    
<?php 

echo "<b>Pedimos el Email del usuario Jorge5a5: </b>" . getDatos($diccionario,"Jorge5a5","Email") . "<br>";

echo "<b>Pedimos el Apellido del usuario JonVadi: </b>" . getDatos($diccionario,"JonVadi","Apellido") . "<br>";

echo "<b>Pedimos el Nombre del usuario Alex777: </b>" . getDatos($diccionario,"Alex777","Nombre") . "<br>";

echo "<b>Intentamos pedir un valor de usuario que no existe (ej: Mascota): </b>" . getDatos($diccionario,"Jorge5a5","Mascota") . "<br>";

?>


</body>
</html>
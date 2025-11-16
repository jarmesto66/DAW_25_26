<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
    Escriba un programa que muestre un número al azar entre 0 y 10, y escriba en letras el valor obtenido.
-->
<body>
   <?php
    $numeros = array("cero", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez");
    $num_azar = rand(0, 10);
    echo "<h1>El número es: $num_azar</h1>";
    echo "<h2>El número se escribe: " . $numeros[$num_azar] . "</h2>";
   ?> 
</body>
</html>
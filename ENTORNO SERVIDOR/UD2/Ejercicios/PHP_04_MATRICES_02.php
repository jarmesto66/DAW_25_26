<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
    Escriba un programa que muestre una secuencia aleatoria de 10 bits y su secuencia complementaria.
-->
<body>
   <?php
        $bits = array();
        $complementarios = array();
        echo "<h1>Bits aleatorios:</h1>";
        for ($i = 0; $i < 10; $i++) {
            //Creamos los bits aleatorios y los almacenamos en un vector
            $bit_azar = rand(0, 1);
            $bits[] = $bit_azar;
            // Mostramos los bits aleatorios mientras los creamos
            echo $bit_azar . " ";
            // Crear el bit complementario
            ($bit_azar == 0) ? $complementarios[] = "1": $complementarios[] = "0";
        }
        // Mostramos los bits complementarios
        echo "<h1>Bits complementarios:</h1>";
        foreach ($complementarios as $bit_comp) {
            echo $bit_comp . " ";
        }
   ?> 
</body>
</html>
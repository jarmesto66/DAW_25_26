<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
    Escriba un programa que muestre un número al azar entre 0 y 10, y escriba en letras el valor obtenido.Escriba un programa que muestre una secuencia aleatoria de 10 bits y la
    detección de cambios de bits consecutivos en la secuencia.
-->
<body>
   <?php
        $bits = array();
        $cambios = array();
        echo "<h1>Bits aleatorios:</h1>";
        for ($i = 0; $i < 10; $i++) {
            //Creamos los bits aleatorios y los almacenamos en un vector
            $bit_azar = rand(0, 1);
            $bits[] = $bit_azar;
            //Mostramos los bits aleatorios mientras los creamos
            echo $bit_azar . " ";
        }
        // Detectamos los cambios de bits consecutivos
        for ($j = 0; $j < count($bits) - 1; $j++) {
            if ($bits[$j] == $bits[$j + 1]) {
                $cambios[] = "0";
            } else {
                $cambios[] = "1";
            }
        }
        // Mostramos los bits de cambios
        echo "<h1>Cambios de bits consecutivos:</h1>";
        foreach ($cambios as $bit_cambio) {
            echo $bit_cambio . " ";
        }
    ?> 
</body>
</html>
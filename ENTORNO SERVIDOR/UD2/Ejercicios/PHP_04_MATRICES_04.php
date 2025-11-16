<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
    Escriba un programa que muestre dos secuencias aleatorias de 10 bits y el
    resultado de hacer el “y” lógico bit a bit.
-->
<body>
   <?php
        $bitsA = array();
        $bitsB = array();
        $andBits = array();
        echo "<h1>Bits aleatorios A:</h1>";
        for ($i = 0; $i < 10; $i++) {
            //Creamos los bits aleatorios para A y los almacenamos en un vector
            $bitA_azar = rand(0, 1);
            $bitsA[] = $bitA_azar;
            //Mostramos los bits aleatorios de A mientras los creamos
            echo $bitA_azar . " ";
        }
        echo "<h1>Bits aleatorios B:</h1>";
        for ($j = 0; $j < 10; $j++) {
            //Creamos los bits aleatorios para B y los almacenamos en un vector
            $bitB_azar = rand(0, 1);
            $bitsB[] = $bitB_azar;
            //Mostramos los bits aleatorios de B mientras los creamos
            echo $bitB_azar . " ";
        }
        // Realizamos la operación AND bit a bit
        for ($k = 0; $k < 10; $k++) {
            $andBits[] = $bitsA[$k] & $bitsB[$k];
        }
        // Mostramos los bits resultantes de la operación AND
        echo "<h1>Resultado de A AND B:</h1>";
        foreach ($andBits as $bit_and) {
            echo $bit_and . " ";
        }
    ?>
</body>
</html>
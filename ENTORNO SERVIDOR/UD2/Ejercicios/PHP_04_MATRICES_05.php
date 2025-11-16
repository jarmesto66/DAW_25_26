<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
    Escriba un programa que muestre tres secuencias aleatorias de 10 bits y una
    cuarta secuencia que indique cuál es el bit más común en esa posición.
-->
<body>
    <?php
        $bitsA = array();
        $bitsB = array();
        $bitsC = array();
        $mostCommonBits = array();
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
        echo "<h1>Bits aleatorios C:</h1>";
        for ($k = 0; $k < 10; $k++) {
            //Creamos los bits aleatorios para C y los almacenamos en un vector
            $bitC_azar = rand(0, 1);
            $bitsC[] = $bitC_azar;
            //Mostramos los bits aleatorios de C mientras los creamos
            echo $bitC_azar . " ";
        }
        // Determinamos el bit más común en cada posición
        for ($m = 0; $m < 10; $m++) {
            $sum = $bitsA[$m] + $bitsB[$m] + $bitsC[$m];
            ($sum >= 2) ? $mostCommonBits[] = "1" : $mostCommonBits[] = "0";
        }
        // Mostramos los bits más comunes
        echo "<h1>Bits más comunes:</h1>";
        foreach ($mostCommonBits as $bit_common) {
            echo $bit_common . " ";
        }
    ?>
</body>
</html>
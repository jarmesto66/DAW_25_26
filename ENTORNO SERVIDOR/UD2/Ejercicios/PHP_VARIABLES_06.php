<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

/*      Escriba un programa que cada vez que se ejecute muestre dos números al azar
    entre 0 y 20 que correspondan a cantidades de yardas, pies y de pulgadas y que
    escriba su valor en centímetros. (1 pulgada = 2.54 cm, 1 pie = 12 pulgadas, 1 yarda = 3 pies)
*/

        // Generar cifras aleatorias
        $yardas = rand(1, 20);
        $pies = rand(1, 20);
        $pulgadas = rand(1, 20);
        
        // Factores de conversión
        $pulgada_a_cm = 2.54;
        $pie_a_pulgada = 12;
        $yarda_a_pie = 3;

        // Convertir todo a centímetros
        $total_pulgadas = ($yardas * $yarda_a_pie * $pie_a_pulgada) + ($pies * $pie_a_pulgada) + $pulgadas;

        // Convertir pulgadas a centímetros
        $centimetros = $total_pulgadas * $pulgada_a_cm;

        // Mostrar resultados
        echo "Yardas: $yardas <br>";
        echo "Pies: $pies <br>";
        echo "Pulgadas: $pulgadas <br>";
        echo "<br>";

        echo "Centímetros: $centimetros cm<br>";

    ?>
</body>
</html>
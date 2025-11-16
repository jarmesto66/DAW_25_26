<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*      Escriba un programa que cada vez que se ejecute muestre un número al azar entre
    0 y 50000 (con hasta dos decimales) que corresponda a una cantidad de
    centímetros y que escriba su valor en yardas, pies y de pulgadas, redondeadas las
    pulgadas con un decimal.
*/
    $cm = rand(0, 5000000) / 100; // Genera un número aleatorio entre 0 y 50000 con dos decimales
    $pulgadas = $cm / 2.54; // Convierte centímetros a pulgadas
    $pies = $pulgadas / 12; // Convierte pulgadas a pies
    $yardas = $pies / 3; // Convierte pies a yardas
    echo "<p>$cm cm son:</p>";
    echo "<ul>";
    echo "<li>" . round($yardas, 2) . " yardas</li>";
    echo "<li>" . round($pies, 2) . " pies</li>";
    echo "<li>" . round($pulgadas, 1) . " pulgadas</li>";
    echo "</ul>";
    ?>
</body>
</html>
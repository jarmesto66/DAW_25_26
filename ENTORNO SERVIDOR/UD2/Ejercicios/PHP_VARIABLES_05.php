<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*      Escriba un programa que cada vez que se ejecute muestre una cantidad de
    segundos al azar entre 0 y 10000 y que escriba su valor en horas, minutos y
    segundos.
*/

        // Genera un número aleatorio entre 0 y 10000
        $segundos_totales = rand(0, 10000);
        
        // Convierte segundos a minutos y calcula los segundos restantes
        $minutos = (int) ($segundos_totales / 60); // Convierte segundos a minutos (como entero)
        $segundos = $segundos_totales % 60; // Calcula los segundos restantes después de convertir a minutos

        // Muestra los resultados

        echo "Segundos totales: $segundos_totales <br>";
        echo "Equivalente en minutos y segundos: ";
        echo $minutos . " minutos y " . $segundos . " segundos <br>";
    ?>
</body>
</html>
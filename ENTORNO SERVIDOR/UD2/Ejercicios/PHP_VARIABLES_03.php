<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

/*      Escriba un programa que cada vez que se ejecute muestre tres números al azar
    entre 0 y 150 que correspondan a una cantidad de horas, minutos y segundos y
    que escriba su valor en segundos.
*/

        // Genera un número aleatorio entre 0 y 1000
        $segundos = rand(0, 150);
        $minutos = rand(0, 150);
        $horas = rand(0, 150);
        $segundos_totales = $segundos + ($minutos * 60) + ($horas * 3600);
        echo "Horas: $horas <br>";
        echo "Minutos: $minutos <br>";
        echo "Segundos: $segundos <br>";
        echo "<br>";
        
        // Muestra los resultados

        echo "Segundos totales: $segundos_totales <br>";
        
    ?>

</body>
</html>
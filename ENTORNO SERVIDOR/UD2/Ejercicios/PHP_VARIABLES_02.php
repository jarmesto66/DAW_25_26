<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

/*      Escriba un programa que cada vez que se ejecute muestre dos números al azar,
    uno de ellos que represente el peso de una persona (entre 50 y 100 kilos) y el otro
    la altura (entre 1.50 y 2.00 metros) y que escriba el IMC correspondiente,
    redondeado con un decimal.
*/

        $peso = rand(500, 1000) / 10; //Genera peso aleatorio entre 50 y 100 kg con un decimal
        $altura = rand(150, 200) / 100; //Genera altura aleatoria entre 1.50 y 2.00 m con dos decimales
        print "El peso es " . $peso . "<br>"; //El peso ya tiene un decimal
        print "La altura es $altura <br>"; //La altura tiene dos decimales

        print "El IMC es " . round(($peso / ($altura * $altura)),1) . "<br>"; //Calcula el IMC y lo redondea a un decimal
    ?>
</body>
</html>
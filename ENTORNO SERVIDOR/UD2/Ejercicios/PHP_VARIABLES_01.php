<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
/*
Escriba un programa que cada vez que se ejecute muestre dos números al azar
entre 0 y 100 y que escriba su media aritmética.
*/
    $var1 = rand(1, 100);
    $var2 = rand(1, 100);
    print "El primer número es $var1 <br>";
    print "El segundo número es $var2 <br>";
    print "La media aritmética es " . (($var1 + $var2) / 2);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <!--Escriba un programa que cada vez que se ejecute muestre un año al azar (a
        partir de 1582, fecha de introducción del calendario gregoriano, hasta el año
        2100, por ejemplo) y diga si ese año es bisiesto.
        Un año es bisiesto si es divisible por 4.
        No es bisiesto si es divisible por 100, a menos que también sea divisible por
        400.
        En cada caso, indicar porqué es bisiesto, o porqué no lo es.-->

    <?php
    $year = rand(1582, 2100);
    echo "<h2>Año seleccionado: $year</h2>";
    if ($year %4== 0) {
        if ($year %100== 0) {
            if ($year %400== 0) {
                echo "<p>El año $year es bisiesto porque es divisible por 400.</p>";
            } else {
                echo "<p>El año $year no es bisiesto porque es divisible por 100 pero no por 400.</p>";
            }
        } else {
            echo "<p>El año $year es bisiesto porque es divisible por 4 pero no por 100.</p>";
        }
    } else {
        echo "<p>El año $year no es bisiesto porque no es divisible por 4.</p>";
    }
    ?>

</body>
</html>
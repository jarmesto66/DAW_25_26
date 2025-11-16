<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
    Escribe un programa que muestre 30 números al azar separados por comas, y diga cuál es el mayor, y el número de veces que se ha obtenido.
-->
<body>
    <?php
        // Variable para almacenar el mayor número
        $mayor = 0;
        // Variable para contar las apariciones del mayor número
        $contador_mayor = 1;
        for ($i = 0; $i < 30 ; $i++) {
                $numero = rand(0,100);
                echo $numero;
                // Añadir una coma si no es el último número
                if ($i < 30) {
                    echo ", ";
                }   
                if ($numero > $mayor) {
                    $mayor = $numero;
                    $contador_mayor = 1;
                } elseif ($numero == $mayor) {
                    $contador_mayor++;
                }
        }
        echo $contador_mayor;
        echo "<p>El mayor número generado es: <strong>$mayor</strong></p>";
        echo "<p>El número $mayor se ha obtenido <strong>$contador_mayor</strong> veces.</p>";
    ?>
</body>
</html>
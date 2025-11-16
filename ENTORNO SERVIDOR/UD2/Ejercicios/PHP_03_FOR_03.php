<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
    Escribe un programa que muestre 20 números al azar y muestre por pantalla cuantos pares e impares hay.
-->
<body>
    <?php
        $pares = 0;
        $impares = 0;

        // Usar un bucle for para generar y contar 20 números al azar
        for ($i = 0; $i < 20; $i++) {
            $numero = rand(0, 100); // Generar un número al azar entre 0 y 100
            echo "$numero "; // Mostrar el número generado

            // Contar si el número es par o impar
            if ($numero % 2 == 0) {
                $pares++;
            } else {
                $impares++;
            }
        }
        // Mostrar la cantidad de números pares e impares
        echo "<p>Números pares: <strong>$pares</strong></p>";
        echo "<p>Números impares: <strong>$impares</strong></p>";
    ?>
</body>
</html>
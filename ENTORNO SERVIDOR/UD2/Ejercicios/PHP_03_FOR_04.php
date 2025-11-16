<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
    Escribe un programa que muestre 20 números al azar separados por comas, y diga cuál es el mayor.
-->
<body>
    <?php
        //Variable para almacenar el mayor número
        $mayor = 0;
        //Usar un bucle para mostrar 20 números separados por comas
        for ($i = 0; $i < 20; $i++) {
            $numero = rand(1, 100); // Generar un número al azar entre 1 y 100
            echo $numero;
            if ($numero > $mayor) {
                $mayor = $numero; // Actualizar el mayor número si el generado es mayor
            }
            // Añadir una coma si no es el último número
            if ($i < 19) {
                echo ", ";
            }
        }
        //Mostrar el mayor número generado
        echo "<p>El mayor número generado es: <strong>$mayor</strong></p>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
    Escribe un programa que escriba un número de dígitos al azar entre 1 y 10. Y muestre por pantalla tanto los dígitos como la suma de ellos.
    Con la función rand, almacenamos un número al azar.
    Mostramos por pantalla el número de dígitos que vamos a escribir.
    Con un bucle for y sucesivas llamadas a rand, escribimos los dígitos al azar.
    Mostramos la suma de estos dígitos.
-->
<body>
    <?php
        // Generar un número aleatorio entre 1 y 10 para la cantidad de dígitos
        $num_digitos = rand(1, 10);

        // Mostrar el número de dígitos que se van a escribir
        echo "<p>Se van a escribir $num_digitos dígitos al azar:</p>";
        // Inicializar la suma
        $suma = 0;
        // Usar un bucle for para escribir los dígitos al azar y calcular la suma
        for ($i = 0; $i < $num_digitos; $i++) {
            $digito = rand(0, 9); // Generar un dígito al azar entre 0 y 9
            echo "$digito "; // Mostrar el dígito
            $suma += $digito; // Sumar el dígito a la suma total
        }
        // Mostrar la suma de los dígitos
        echo "<p>La suma de los dígitos es: <strong>$suma</strong></p>";
    ?>
</body>
</html>
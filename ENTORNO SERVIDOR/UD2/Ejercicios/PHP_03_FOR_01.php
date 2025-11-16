<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
    Escribe un programa que escriba la palabra hola un número de veces al azar entre 1 y 10.
    Utilizaremos la función rand con los parámetros 1 y 10 para obtener un número al azar entre 1 y 10. rand(1,10)
    Mostraremos por pantalla el número de veces que vamos a escribir hola.
    Y con un bucle for, lo escribiremos en una misma línea.
-->
<body>
    <?php
        // Generar un número aleatorio entre 1 y 10
        $num_veces = rand(1, 10);
        // Mostrar el número de veces que se va a escribir "hola"
        echo "<p>Se va a escribir 'hola' $num_veces veces:</p>";
        // Usar un bucle for para escribir "hola" el número de veces generado
        for ($i = 0; $i < $num_veces; $i++) {
            echo "hola ";
        }
    ?>
</body>
</html>
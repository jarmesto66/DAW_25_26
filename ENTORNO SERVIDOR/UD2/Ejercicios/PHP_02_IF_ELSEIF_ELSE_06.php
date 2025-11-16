<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <!--Escriba un programa que cada vez que se ejecute muestre una distancia en
        centímetros al azar (de 0 a 200.000, por ejemplo) y muestre esa misma
        distancia en kilómetros, metros y centímetros.
        No escribáis las unidades innecesarias, cuando el valor es cero.
        Escribid comas después de las unidades, menos al final que pondremos la
        conjunción “y” antes de la última unidad-->
    <?php
        // Generar una distancia aleatoria entre 0 y 200000 cm
        $distancia_cm = rand(0, 200000);

        // Calcular kilómetros, metros y centímetros
        $km = intdiv($distancia_cm, 100000);
        $resto = $distancia_cm % 100000;
        $m = intdiv($resto, 100);
        $cm = $resto % 100;

        // Crear una lista con las unidades necesarias (omitimos las que sean cero)
        $partes = [];

        if ($km > 0) {
            $partes[] = "$km kilómetro" . ($km > 1 ? "s" : "");
        }

        if ($m > 0) {
            $partes[] = "$m metro" . ($m > 1 ? "s" : "");
        }

        if ($cm > 0) {
            $partes[] = "$cm centímetro" . ($cm > 1 ? "s" : "");
        }

        // Si todos los valores son cero, mostramos "0 centímetros"
        if (empty($partes)) {
            $partes[] = "0 centímetros";
        }

        // Unir las partes con comas y “y” antes de la última
        if (count($partes) > 1) {
            $ultima = array_pop($partes);
            $texto = implode(", ", $partes) . " y " . $ultima;
        } else {
            $texto = $partes[0];
        }

        // Mostrar el resultado
        echo "<p>Distancia original: <strong>$distancia_cm cm</strong></p>";
        echo "<p>Equivale a: <strong>$texto</strong></p>";
    ?>
</body>
</html>
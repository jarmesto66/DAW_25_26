<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
    Escriba un programa que enfrente a dos jugadores tirando un dado cada uno,
    un número de veces al azar entre 2 y 7, e indique quien ha ganado.
-->
<body>
    <?php
        $num_tiradas = rand(2, 7);
        $jugador1 = array();
        $jugador2 = array();
        $gana_j1 = 0;
        $gana_j2 = 0;
        $empates = 0;
        echo "<h1>Número de tiradas: $num_tiradas</h1>";
        for ($i = 0; $i < $num_tiradas; $i++) {
            // Tirada del jugador 1
            $dado_j1 = rand(1, 6);
            $jugador1[] = $dado_j1;
            // Tirada del jugador 2
            $dado_j2 = rand(1, 6);
            $jugador2[] = $dado_j2;
            // Determinar el ganador de la tirada
            if ($dado_j1 > $dado_j2) {
                $gana_j1++;
            } elseif ($dado_j2 > $dado_j1) {
                $gana_j2++;
            } else {
                $empates++;
            }
        }
        // Mostrar resultados
        echo "<h2>Jugador 1 tiradas: " . implode(", ", $jugador1) . "</h2>";
        echo "<h2>Jugador 2 tiradas: " . implode(", ", $jugador2) . "</h2>";
        echo "<h2>Jugador 1 gana: $gana_j1 veces</h2>";
        echo "<h2>Jugador 2 gana: $gana_j2 veces</h2>";
        echo "<h2>Empates: $empates veces</h2>";
        // Determinar el ganador final
        if ($gana_j1 > $gana_j2) {
            echo "<h1>El ganador es el Jugador 1</h1>";
        } elseif ($gana_j2 > $gana_j1) {
            echo "<h1>El ganador es el Jugador 2</h1>";
        } else {
            echo "<h1>El juego termina en empate</h1>";
        }
    ?>
    
</body>
</html>
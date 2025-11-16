<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
            /*Escriba un programa que cada vez que se ejecute muestre la tirada de dos
            dados al azar y diga si se ha conseguido el objetivo de paridad; queremos sacar
            primero un valor par y después un valor impar.
            En caso de que uno o los dos valores no sea correcto, se mostrará un único
            aviso.
            Solución (posible);
            Utilizaremos dos variables a las que damos un valor aleatorio.
            Comprobamos si el primer número es par y el segundo impar.
            Si es verdadero mostraremos un mensaje para indicarlo;
            Se cumple el objetivo de paridad (primero par, segundo impar)
            Si es falso mostraremos otro mensaje para indicarlo;
            No se cumple el objetivo de paridad (primero par, segundo impar)*/

        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);
        echo "Primera tirada: " . $dado1 . "<br>Segunda tirada: " . $dado2 . "";


        if( $dado1 % 2 == 0 && $dado2 % 2 != 0 ) {
            echo "<p>Se cumple el objetivo de paridad (primero par, segundo impar)</p>";
        } else {
            echo "<p>No se cumple el objetivo de paridad (primero par, segundo impar)</p>";
            
        }

    ?>
</body>
</html>
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
            dados al azar y diga si se ha conseguido el objetivo de paridad (queremos
            sacar primero un valor par y después un valor impar).
            En caso de que uno o los dos valores sean correctos, se mostrarán uno o dos
            avisos.
            Dependiendo del resultado obtenido se muestran distintos mensajes;
            Cuando no se consigue el primer dado par se muestra el mensaje; “No hemos
            conseguido el primer dado par”.
            Cuando no se consigue el segundo dado impar se muestra el mensaje; “No
            hemos conseguido el segundo dado impar”.
            El mensaje final; “Lo hemos conseguido”, se muestra cuando el primer dado es
            par y el segundo impar.*/

        $dado1 = rand(1, 6);
        $dado2 = rand(1,6);
        echo "Primera tirada: " . $dado1 . "<br>Segunda tirada: " . $dado2 . "<br>";
        if ($dado1 %2!= 0) {
            echo "No hemos conseguido el primer dado par <br>";
        } else if ($dado2 %2== 0) {
            echo "No hemos conseguido el segundo dado impar<br>";
        } else {
            echo "Lo hemos conseguido";
        }
    ?>
</body>
</html>
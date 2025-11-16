<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <!--Escriba un programa que cada vez que se ejecute muestre la tirada de dos
        dados al azar y diga si se ha conseguido el objetivo de paridad (queremos
        sacar primero un valor par y después un valor impar).
        Tras cada tirada, si el valor no es correcto se mostrará un aviso.-->

    <?php
        $dado1 = rand(1, 6);
        $dado2 = rand(1,6);
        echo "Primera tirada: " . $dado1 . "<br>Segunda tirada: " . $dado2 . "<br>";
        if ($dado1 %2!= 0) {
            echo "No hemos conseguido el primer dado par <br>";
        }
        if ($dado2 %2== 0) {
            echo "No hemos conseguido el segundo dado impar<br>";
        }
        if ($dado1 %2== 0 && $dado2 %2!= 0) {
            echo "Lo hemos conseguido";
        }
    ?>

</body>
</html>
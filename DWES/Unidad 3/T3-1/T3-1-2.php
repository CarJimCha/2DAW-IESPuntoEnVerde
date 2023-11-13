<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3-1 - Ejercicio 2</title>
</head>
<body>

    <h2>Ejercicio 2 - Suma - multiplicación de números</h2>
    <p>Escriba un programa que cada vez que se ejecute muestre dos 
        números entre 1 y 10 al azar, e indique:</p>
    <p>● La suma de dichos números</p>
    <p>● La multiplicación de dichos números.</p>

    <form action="" method="post">
        <input type="submit" name="suma" value="Suma"><br>
        <input type="submit" name="mult" value="Multiplicación"><br>
    </form>

    <?php

        // Generamos los dos números aleatorios usando la función "rand"
        $num1 = rand(1,10);
        $num2 = rand(1,10);

        // Mostramos los números tras ejecutar
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        // if ((isset($_POST["suma"])) || (isset($_POST["mult"]))){
            echo "<p>Los dos números aleatorios son $num1 y $num2</p>";
        }

        // En el caso de que pulses el botón "Suma"
        if (isset($_POST["suma"])){
            $suma = $num1 + $num2;
            echo "<p>$num1 + $num2 = $suma</p>";
        }

        // En el caso de que pulses el botón "Multiplicación"
        if (isset($_POST["mult"])){
            $mult = $num1 * $num2;
            echo "<p>$num1 x $num2 = $mult</p>";

        }

    ?>

</body>
</html>
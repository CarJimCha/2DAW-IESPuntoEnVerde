<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3-1 - Ejercicio 3</title>

    <h2>Ejercicio 3 - Números</h2>

    <p>Escriba un programa que muestre un número del cero al 9 al azar
         y escriba en letras el valor obtenido.</p>

    <?php
    
         // Generamos un número aleatorio usando la función "rand"
         $n = rand(0,9);

        // Según el caso, imprime el número escrito en letras
        switch ($n) {
            case 0:
                echo "<p>Cero</p>";
                break;
            case 1:
                echo "<p>Uno</p>";
                break;
            case 2:
                echo "<p>Dos</p>";
                break;
            case 3:
                echo "<p>Tres</p>";
                break;
            case 4:
                echo "<p>Cuatro</p>";
                break;
            case 5:
                echo "<p>Cinco</p>";
                break;
            case 6:
                echo "<p>Seis</p>";
                break;
            case 7:
                echo "<p>Siete</p>";
                break;
            case 8:
                echo "<p>Ocho</p>";
                    break;
            case 9:
                echo "<p>Nueve</p>";
                break;
        }


    ?>

</head>
<body>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

    <!-- Enunciado y descripción del ejercicio -->
    <h1>El bit más común</h1>
    <p>Actualice la página para mostrar tres secuencias aleatorias de bits
        y una cuarta secuencia que indica cúal es el bit más común en esa posición.
    </p>
    
    <?php

            // Bucle A
            echo "<b>A:</b> ";

            // Generamos la secuencia de bits en si
            for ($i = 0; $i < 10; $i++) {

                $a[$i] = rand(0,1);

                // Actualizamos el acumulador por cada 1
                /* if ($a[$i] = 0){
                    $acumulador++;
                } */

                echo "<b>$a[$i]</b> ";
                
            }

            echo "<br>";
            
            
            // Bucle B
            echo "<b>B:</b> ";

            // Generamos la secuencia de bits en si
            for ($i = 0; $i < 10; $i++) {

                $b[$i] = rand(0,1);

                echo "<b>$b[$i]</b> ";
                
            }

            echo "<br>";

            // Bucle C
            echo "<b>C:</b> ";

            // Generamos la secuencia de bits en si
            for ($i = 0; $i < 10; $i++) {

                $c[$i] = rand(0,1);

                echo "<b>$c[$i]</b> ";
                
            }

            echo "<br>";
            

        // Comparamos los bits para indicar cuál es el más común en cada posición
            echo "<br>";

            // Bucle R
            echo "<b>R:</b> ";

            // Creamos la secuencia de bits
            for ($i = 0; $i < 10; $i++) {

                // Para ver cual es el más común, sumamos los que ocupan la misma posición
                // Si la suma es mayor que 1, es que hay 2 o 3 valores de 1, luego son mayoría
                // En caso contrario, el valor mayoritario es el 0


                // Para ver si es 1 o 0, comparamos los dos primeros
                // Si era el mismo bit en A y en B, se mantiene para R (2/3 o 3/3)
                if ($a[$i] == $b[$i])
                {
                    $r[$i] = $a[$i];
                }
                // Si no eran el mismo bit, comparamos en A y C
                // Si coinciden, es el más común, sino, tomamos C (que será igual que B)
                else
                {
                    if ($a[$i] == $c[$i])
                    {
                        $r[$i] = $a[$i];
                    } else {
                        $r[$i] = $c[$i];
                    }
                };

                echo "<b>$r[$i]</b> ";
                
            }

            // Ahora, sumemos los valores de cada bit
            // Para ello, creamos un acumulador
            $acumulador = 0;

            // Por cada 1 que encuentre, sumará 1 al acumulador
            for ($i = 0; $i < 10; $i++) {
                if ($a[$i] == 1){
                    $acumulador++;
                }
                if ($b[$i] == 1){
                    $acumulador++;
                }
                if ($c[$i] == 1){
                    $acumulador++;
                }
                if ($r[$i] == 1){
                    $acumulador++;
                }
            }

            // Ahora formateamos el texto para que quede más legible y mostramos el resultado
            echo "<br><br>";
            echo "<b>El número total de bits a 1 es $acumulador</b>";
        
        
    ?>

</body>
</html>
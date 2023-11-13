<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección directa</title>
</head>
<body>

    <h1>Selección directa</h1>
    <p>Implementa el método de ordenación de "selección directa" para un array con los valores: 50, 23, 18, 10, 27, 43, 5.</p>
    <ul>
        <li>Declara el array e inicialízalo.</li>
        <li>Crea un botón para ejecutar la ordenación "Selección directa" de esos valores.</li>
        <li>Muestra el array antes y después, comprobando que ahora está ordenado.</li>
    </ul>

    <!-- Crea un botón para ejecutar la ordenación de los valores del array -->
    <form action="" method="post">
        <input type="submit" name="exe" value="Selección directa"><br>
    </form>

    <br>
    <br>

    <?php
        // Declara el array e inicialízalo
        $a = array(
            0 => 50,
            1 => 23,
            2 => 18,
            3 => 10,
            4 => 27,
            5 => 43,
            6 => 5);

        // Si se pulsa el botón...
        if (isset($_POST["exe"])){

            // Mostramos el array antes de ordenarlo
            echo "El array original es: "; 
            echo("<pre>");
            print_r($a);
            echo("</pre>");

            // Espaciamos un poco, por estética
            echo "<br>";
            echo "<br>";
            
            // ORDENAR ARRAY
            
            // Necesitaremos saber la longitud para el bucle
            $l = count($a);
            $arrayOrd = $a;


            for ($i = 0; $i < $l; $i++){
                
                // Borramos los i primeros 
                $arrayAux = $arrayOrd;
                for ($j = 0; $j < $i; $j++){
                    unset($arrayAux[$j]);
                }

                /*
                // Para comprobar si hacía bien el proceso por dentro
                print_r($arrayAux);
                echo "<br>";
                echo "<br>";
                */

                // Buscamos el menor del array "pequeño"
                $min = min($arrayAux);

                // Buscamos el índice del menor
                $pos = array_search($min, $arrayAux);
                
                // Reordenamos, sustituyendo el primero por el menor y viceversa
                // Los sustituimos en la lista ordenada, que es donde lo necesitamos
                // Guardamos el primero
                $primero = $arrayAux[$i];
                // Lo sustituimos
                $arrayOrd[$i] = $min;
                // Cambiamos el menor por el primero
                $arrayOrd[$pos] = $primero;

            }

            // Al acabar, mostramos el array ordenado
            echo "El array ordenado es: "; 
            echo("<pre>");
            print_r($arrayOrd);
            echo("</pre>");

        }

    ?>
    
</body>
</html>
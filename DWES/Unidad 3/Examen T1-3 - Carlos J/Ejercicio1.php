<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <!-- Enunciado y descripción del ejercicio -->
    <h1>Todos los dados</h1>
    <p>Si sacas todos los dados en menos de doce tiradas, habrás ganado, en caso contrario habrás perdido</p>
    
    <?php
    // Creamos dos variables auxiliares que nos ayudarán a validar que hayan salido todos los resultados y el número de tiradas
    $tirada = 0;
    $comprobacion = [0,0,0,0,0,0];

    $fin = [1,1,1,1,1,1];
    
    // Y hasta que no se cumpla la condición, se repetirá el proceso
    while ($comprobacion != $fin){

        // Generamos la tirada aleatoria
        $array[$tirada] = rand(1,6);

        // "Avisamos" de que el resultado ya ha salido
        // Para ello, comprobamos el resultado, y le ponemos un 1 en el array de comprobación
        // Pues, una vez todo sean 1, el bucle acabará
        for ($i = 1; $i <= 6; $i++) {
            if ($i == $array[$tirada]){
                $comprobacion[($i)-1] = 1;
            }
        }

        // Cada vez que tiramos, el número de tiradas aumenta en 1
        $tirada++;
    }

    // Mostramos el array de tiradas
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    
    // Formateamos un poco, por el bien de la presentacion
    echo "<br>";
    
    // Ahora dos mensajes, según si el jugador gana 
    if ($tirada < 12){
        echo "<h2><b>Número de tiradas $tirada</b> &#128077;</h2>";
    }
    // O si pierde
    else {
        echo "<h2><b>Número de tiradas $tirada</b> &#128078;</h2>";
    }

    // Procedemos a contar las veces que ha salido cada valor
    $contamos = array_count_values($array);

    
    // Empezando por el que más veces ha salido por pantalla, hasta el que ha salido 1
    for ($j = max($contamos); $j >= 1 ; $j--) {

        // Mostramos por pantalla destacando dos casos
        for ($i = 1; $i <= 6; $i++) {
            // Si ha salido más de una vez
            if (($contamos[$i] == $j) && ($j > 1)){
                echo "<p>El dado $i ha salido $contamos[$i] vez.</p>";
            }
            // O si ha salido más de una
            if (($contamos[$i] == $j) && ($j == 1)){
                echo "<p>El dado $i ha salido $contamos[$i] vez.</p>";
            }
        } 
        
    }
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h1>Factorial</h1>
    <form action="" method="post">
        <label for="cifra">Introduce una cifra: </label>        
        <input type="number" id="cifra" name="cifra"><br>
        <input type="submit" name="factorial" value="Calcular factorial"><br>
    </form>
    <?php

    /*
    Implementar el factorial de un número con las estructuras 
    for,  While , Do while y por recursividad.  El resultado final
    tiene generar como salida el resultado y una explicación de
    cada una de las estructuras realizadas, destacando las diferencias
    de cada una de ellas (puede incluir código).
    */
    
    if (isset($_POST["factorial"])){
        $factorial = $_POST["cifra"];
        
        echo "<h2>For</h2>";
        echo "<p>Para calcular el factorial usando un for, basta con inicializar una
             variable a 1 (el número neutro del producto), e ir sustituyendo la variable
             con cada iteración por el producto de sí misma por el nuevo número.</p>";
        $for = 1;
        for ($x = 1; $x <= $factorial; $x++) {
            $for = $x * $for;
        }
        echo "<p>El factorial de $factorial es: $for</p>";
        
        echo "<h2>While</h2>";
        echo "<p>Para calcular el factorial usando un while, inicializamos un contador a 1
         y una variable auxiliar (que nos servirá para calcular el factorial) también a 1.
         El contador nos servirá para irlo incrementando de uno en uno hasta llegar al valor
         al que queremos llegar. Mientras tanto, en cada iteración, multiplicaremos el valor
         actual de la variable auxiliar por sí mismo y por el nuevo valor que tome el contador.</p>";
        $while = 1;
        $contadorW = 1;
        while ($contadorW <= ($factorial)) {
            $while = $while * $contadorW;
            $contadorW++;
        }
        echo "<p>El factorial de $factorial es: $while</p>";
        
        echo "<h2>Do while</h2>";
        echo "<p>El do while se realiza básicamente igual que el while, siendo la diferencia
         fundamental entre ambos bucles que, mientras que el while comprueba el contador a 
         cada paso antes de realizar la operación, el do while efectúa la iteración antes de 
         comprobarlo por primera vez. Una vez ejecutada esa primera vez, el bucle funciona
         del mismo modo.</p>";
        $doWhile = 1;
        $contadorDW = 1;
        do {
            $doWhile = $doWhile * $contadorDW;
            $contadorDW++;
        } while ($contadorDW <= $factorial);
        echo "<p>El factorial de $factorial es: $doWhile</p>";
        
        echo "<h2>Recursividad</h2>";
        echo "<p>Esta es la más distinta de las formas de calcular el factorial. Para crearla,
         nos hemos valido de una función auxiliar que calcula el factorial de un número basándose
         en dos casos clave: el caso base (si es menor estricto que dos), que devuelve simplemente
         un 1, y el resto (mayores o iguales que dos), que multiplican el factorial del número
         inmediatamente menor por el número siguiente.</p>";
        echo "<p>Para mostrar el resultado, ejecutamos la función de factorial del número que 
        queremos calcular, y lo devolvemos por pantalla.</p>";
        function factorialRecursivo($num) {   
            if ($num < 2) {
                return 1;
            } else {
                return ($num * factorialRecursivo($num-1));
            }
        }
        $recursividad = factorialRecursivo(($factorial));
        echo "<p>El factorial de $factorial es: $recursividad</p>";
        
    }
    
    ?>
</body>
</html>
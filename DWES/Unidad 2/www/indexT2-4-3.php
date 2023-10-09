<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Ejercicio 3</h1>

    <?php
        $a = 6;
        $b = 3;
        
        echo "<h3>Con echo</h3>";
        echo "<p>El resultado de sumar \$a y \$b es: " . $a + $b . "</p>";
        echo "<p>El resultado de restar \$a y \$b es: " . $a - $b . "</p>";
        echo "<p>El resultado de multiplicar \$a y \$b es: " . $a * $b . "</p>";
        echo "<p>El resultado de dividir \$a y \$b es: " . $a / $b . "</p>";
        
        echo "<h3>Con print</h3>";
        print "<p>El resultado de sumar \$a y \$b es: " . $a + $b . "</p>";
        print "<p>El resultado de restar \$a y \$b es: " . $a - $b . "</p>";
        print "<p>El resultado de multiplicar \$a y \$b es: " . $a * $b . "</p>";
        print "<p>El resultado de dividir \$a y \$b es: " . $a / $b . "</p>";
        
        echo "<h3>Con printf</h3>";
        printf("%s\n","<p>El resultado de sumar \$a y \$b es: " . $a + $b . "</p>",);
        printf("%s\n","<p>El resultado de restar \$a y \$b es: " . $a - $b . "</p>");
        printf("%s\n","<p>El resultado de multiplicar \$a y \$b es: " . $a * $b . "</p>");
        printf("%s\n","<p>El resultado de dividir \$a y \$b es: " . $a / $b . "</p>");
    ?>
  
</body>
</html>
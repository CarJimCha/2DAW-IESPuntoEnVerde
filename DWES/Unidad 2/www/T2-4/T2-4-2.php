<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T2.4.2</title>
</head>
<body>

    <h2>Ejercicio 2</h2>
        <?php
            $a = 2;
            $b = $a;
            echo "<p>La variable \$a vale: " . $a . "</p>";
            echo "<p>La variable \$b vale: " . $b . "</p>";
            // Elimino la referencia... De b, entiendo
            unset($b);
            echo "<p>La variable \$a vale: " . $a . "</p>";
            echo "<p>La variable \$b vale: " . $b . "</p>";
        ?>
    
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de un triángulo</title>
</head>
<body>
    
    <h1>Ejercicio 4</h1>

    <h2>CALCULAR ÁREA TRIÁNGULO</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <label for="cifra">Escribe la base: </label>        
        <input type="number" id="base" name="base" value="0"><br>

        <label for="cifra">Escribe la altura: </label>        
        <input type="number" id="altura" name="altura"><br>

        <input type="submit" name="calcArea" value="Calcular el área"><br>

    </form>
    <?php

    ?>
    
</body>
</html>
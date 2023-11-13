<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3-1 - Ejercicio 4</title>
</head>
<body>

    <h2>Ejercicio 4 - Ciudades</h2>
    <p>Escriba un array de ocho ciudades de España. 
        Elimina al azar una de ellas y muestra el nuevo array de ciudades.</p>
    
    <!-- Formulario donde introduciremos las ciudades -->
    <form action="" method="POST">
        
        <p>Ciudades de España: </p>
        
        <label for="prov0">0: </label>        
        <input type="text" id="prov0" name="prov0"><br>
        <label for="prov1">1: </label>        
        <input type="text" id="prov1" name="prov1"><br>
        <label for="prov2">2: </label>        
        <input type="text" id="prov2" name="prov2"><br>
        <label for="prov3">3: </label>        
        <input type="text" id="prov3" name="prov3"><br>
        <label for="prov4">4: </label>        
        <input type="text" id="prov4" name="prov4"><br>
        <label for="prov5">5: </label>        
        <input type="text" id="prov5" name="prov5"><br>
        <label for="prov6">6: </label>        
        <input type="text" id="prov6" name="prov6"><br>
        <label for="prov7">7: </label>        
        <input type="text" id="prov7" name="prov7"><br>

        <br>
        <input type="submit" name="submit" value="Ejecutar programa"><br>
    
    </form>
        
    <?php
        
        // Comprobar que se ha pulsado el botón
        if (isset($_POST["submit"])){

            // Definimos un array con los datos del formulario
            $ciudades = array(
                $ciudad0 = $_POST['prov0'],
                $ciudad1 = $_POST['prov1'],
                $ciudad2 = $_POST['prov2'],
                $ciudad3 = $_POST['prov3'],             
                $ciudad4 = $_POST['prov4'],
                $ciudad5 = $_POST['prov5'],
                $ciudad6 = $_POST['prov6'],
                $ciudad7 = $_POST['prov7'],
            );

            var_dump($ciudades);


        }

    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Cookies</title>
</head>
<body>
    <h1>Agenda con cookies</h1>
    <form action="" method="post">
        <label name="nombre">Nombre: </label>
        <input type="text" name="nombre">
        <input type="submit" name="guardar" value="Guardar">
        <input type="submit" name="leer" value="Leer">   
    </form>

    <?php 

        // Obtener el valor actual de la cookie, si existe.
        if (isset($_COOKIE['agenda'])){
            $personas = unserialize($_COOKIE['agenda']);
        }
        // Si no existe una cookie, la creamos.
        else {
            $personas = array();
        }
        
        // Refrescamos la cookie con cada interacción
        setcookie('agenda', serialize($personas), time()+15);

        // Guardar: Guarda los nombres en el array
        if (isset($_POST["guardar"])){    
            array_push($personas, $_POST["nombre"]);
            // setcookie('agenda', serialize($personas), time()+15);

            // Mensaje de comprobación
            echo "<p>" . $_POST["nombre"] . " ha sido añadido a la agenda.</p>";
        }

        // Leer: Muestra los nombres por pantalla
        if (isset($_POST["leer"])){
            
            // Si la agenda no está vacía
            if (count($personas) > 0){
                echo "<h4>Agenda:</h4>";
                echo "<ul>";
                foreach($personas as $indice => $valor) {
                    echo "<li>" . $indice+1 . " - $valor</li>";
                }
                echo "</ul>";
            }
            
            // Si la agenda está vacía
            else {
                echo "<p>La agenda está vacía.</p>";
            }

        }


        // Cookies: 10 seg
        // Sesiones: Con botón de cerrar sesión

        /************
         *             LA CLAVE
         *  $personas = unserialize($_COOKIE['agenda])`;
         *  setcookie('agenda', serialize($personas), time()+15);
         * 
        **************/

    ?>
    
</body>
</html>
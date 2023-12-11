<?php
        // Iniciamos la sesión
        session_start();

        // Comprobamos que existe una sesion 
        if (isset($_POST['iniciar'])){
            $_SESSION['agenda'] = array();
        }       

        // Cerrar sesion
        if (isset($_POST["cerrar"])){
            //Borrar variables de sesion
            session_unset();
            // Cierra sesion
            session_destroy();
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }

        // Guardar: Guarda los nombres en el array
        if (isset($_POST["guardar"]) && isset($_POST['nombre']) && !($_POST['nombre'] == "")){    
            $_SESSION['agenda'][] = $_POST["nombre"];  
        }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Sessions</title>
</head>
<body>
    <h1>Agenda con sesiones</h1>
    
    <?php 
        // Según si el usuario ya ha iniciado sesión o no, mostramos una pantalla u otra

        
        if (isset($_SESSION['agenda'])){ 
            
            // Si ha iniciado sesión
            ?>
        
            <form action="" method="post">
                <label name="nombre">Nombre: </label>
                <input type="text" name="nombre">
                <input type="submit" name="guardar" value="Guardar">
                <input type="submit" name="leer" value="Leer">
                <input type="submit" name="cerrar" value="Cerrar sesión">    
            </form>
        
    <?php     
    } else {  
            // Si no ha iniciado sesion
    ?>

            <form action="" method="post">
                <input type="submit" name="iniciar" value="Iniciar sesión">    
            </form>

    <?php 
        }  
    ?>

    <?php

        // Si le hemos dado al botón de guardar
        if (isset($_POST["guardar"]) && isset($_POST['nombre']) && !($_POST['nombre'] == "")){
            // Mensaje de comprobación
            echo "<p>" . $_POST["nombre"] . " ha sido añadido a la agenda.</p>";
        }

        // Leer: Muestra los nombres por pantalla
        if (isset($_POST["leer"])){
            
            // Si la agenda no está vacía
            if (count($_SESSION['agenda']) > 0){
                echo "<h4>Agenda:</h4>";
                echo "<ul>";
                foreach($_SESSION['agenda'] as $indice => $valor) {
                    echo "<li>" . $indice+1 . " - $valor</li>";
                }
                echo "</ul>";
            }
            
            // Si la agenda está vacía
            else {
                echo "<h4>La agenda está vacía.</h4>";
            }

        }

    ?>
    
</body>
</html>
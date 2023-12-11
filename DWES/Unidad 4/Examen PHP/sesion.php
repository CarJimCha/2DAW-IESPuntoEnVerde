<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de usuario</title>
</head>
<body>

    <!-- Título -->
    <h1>Portal de usuario</h1>

    <p>Hola, tu clave es 1234</p>
    
    <!-- Formulario -->
    <form action="" method="post">
        <input type="submit" name="leer">
        <input type="submit" name="cerrar"><br>
    </form>

    <?php 

        // Si pulsamos el botón de leer
        if (isset($_POST['leer'])){

        }

        // Si pulsamos el botón de cerrar
        if (isset($_POST['cerrar'])){

            // Cerramos la sesion, liberando antes las variables
            session_unset();
            session_destroy();

            // Redireccinamos a la página de login
            echo '<p>Puedes seguir hacia el <a href="/u4/Examen%20PHP/login.php"> portal de usuario</a></p>';
        }    

    ?>

</body>
</html>
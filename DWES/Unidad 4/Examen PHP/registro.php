<?php   // FUENTES: T3-10, stack overflow (/n) y php.net (fopen)  ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios ++</title>
</head>
<body>
    
    <!-- Título -->
    <h1>Formulario de registro</h1>
    
    <!-- Formulario -->
    <form action="" method="post">
        
        <label>E-mail:</label><br>
        <input type="text" name="email"><br>

        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br>

        <label>Edad:</label><br>
        <input type="number" name="edad"><br>

        <label>Contraseña:</label><br>
        <input type="text" name="pass"><br>

        <label>Confirmar contraseña:</label><br>
        <input type="text" name="confPass"><br>

        <br>

        <input type="submit" name="enviar" value="Log in">

    </form>

    <?php 

        // Al pulsar el botón de enviar
        if (isset($_POST["enviar"]) == 1){ 
            
            $email = $_POST["email"];
            $nombre = $_POST["nombre"];
            $edad = $_POST["edad"];
            $pass = $_POST["pass"];
            $confPass = $_POST["confPass"];


            // Condiciones: mail y edad + Contraseña confirmada con éxito
            if ((preg_match_all("/.+@.+\.com/", $email)) && (preg_match_all("/(1[89]|[2-5][0-9]|6[0-5])/", $edad)) && ($pass == $confPass)){

                /* // Comprobando el directorio
                $directorio = getcwd();
                echo "<p>$directorio</p>";
                */

                // Se cumplen ambas: seguimos               

                // Crea un nuevo fichero
                if ($file = fopen("usuarios.txt", "a")){
                
                    // Introducimos un mensaje
                    $mensaje = $email . "," . $nombre . "," . $edad . "," . $pass . "\n";

                    // Lo escribimos en el fichero
                    // fwrite($file, "\n");    // Esto hace que meta un salto al principio. Ya veremos si nos jode.
                    fwrite($file, $mensaje);
                    
                    // Cerramos el fichero
                    fclose($file);
                }

            }
            // No se cumplen: mensajes de error
            else {

                echo "<h4>Ha habido un error:</h4>";
                
                // No cumple el mail
                if  (!(preg_match_all("/.+@.+\.com/", $email))){
                    echo "<p>El email no es correcto</p>";
                }

                // No cumple la edad
                if  (!(preg_match_all("/.+@.+\.com/", $email))){
                    echo "<p>La edad no está comprendida entre 18 y 65 años</p>";
                }

                // La contraseña no ha sido confirmada
                if (!($pass == $confPass)){
                    echo "<p>La contraseña no ha sido confirmada con éxito.</p>";
                    echo "<p>Asegurate de escribirla igual en ambos campos.</p>";
                }

            }
       
        }    
    
    ?>


</body>
</html>
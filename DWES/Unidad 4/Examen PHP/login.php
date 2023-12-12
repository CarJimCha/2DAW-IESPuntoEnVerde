<?php 
    // Iniciamos la sesion 
    if (isset(($_POST['enviar'])) && ($email == "usuario@gmail.com") && ($pass == "1234")) {
        session_name("$email");
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de login</title>
</head>
<body>

    <!-- Título -->
    <h1>Formulario de login</h1>

    <!-- Formulario -->
    <form action="" method="post">
        
        <label>E-mail:</label><br>
        <input type="text" name="email" default="
            <?php 
            // En caso de que ya haya intentado hacer login, mantendrá el mail cuanto dure la cookie            
            if (isset($_COOKIE["emailEnviado"])){
                echo $_COOKIE["emailEnviado"];
            }    ?>
                "><br>

        <label>Contraseña:</label><br>
        <input type="text" name="pass"><br>

        <br>

        <input type="submit" name="enviar" id="enviar">

    </form>

    <?php 
    
        // Al pulsar el botón de enviar
        if (isset($_POST['enviar'])){

            $email = $_POST['email'];
            $pass = $_POST["pass"];

            // Comparamos el correo y la contraseña
            if (($email == "usuario@gmail.com") && ($pass == "1234")){

                // Si coinciden, nos redirige al portal de usuario
                echo '<p>Puedes seguir hacia el <a href="/u4/Examen%20PHP/sesion.php"> portal de usuario</a></p>';
            }
            
            // En caso de error
            else {

                // En primer lugar, mandamos los distintos mensajes de error
                echo "<p>Login incorrecto.</p>";

                // Si falla el email
                if (!($email == "usuario@gmail.com")){
                    echo "<p>Error en el email.</p>";
                }

                // Si falla la contraseña
                if (!($pass == "1234")){
                    echo "<p>Error en la contraseña.</p>";
                }

                // Enviamos una cookie
                $_COOKIE["emailEnviado"] = $email;
                setcookie("emailEnviado", $email, 10);

            }



        }
    
    ?>
    
    
</body>
</html>
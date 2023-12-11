<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
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

        <input type="submit" name="enviar">

    </form>

    <?php 

        // Al pulsar el botón de enviar
        if (isset($_POST["enviar"]) == 1){ 
            
            $email = $_POST["email"];
            $edad = $_POST["edad"];

            // Condiciones: mail y edad
            if ((preg_match("/.+@.+\.com/", $email) >= 1) && ((preg_match("/1[89]|[2-5]d|6[0-5]/", $edad)) >= 1)){

                // Se cumplen ambas: seguimos

            }
            // No se cumplen: mensajes de error
            else {
                
                // No cumple el mail
                if  (!(preg_match("/.+@.+\.com/", $email) >= 1)){
                    echo "<p>El email no es correcto</p>";
                }

                // No cumple la edad
                if  (!(preg_match("/.+@.+\.com/", $email) >= 1)){
                    echo "<p>La edad no está comprendida entre 18 y 65 años</p>";
                }

            }
       
        }    
    
    ?>


</body>
</html>
<?php 
    // Iniciamos la sesión
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

    <?php 
        $datos = $_SESSION["datos"];
        // echo `<p>Hola $datos[nombre], tu clave es $datos[pass].</p>`;
    ?>
    
    <!-- Formulario -->
    <form action="" method="post">
        <input type="submit" name="leer" value="Leer usuarios">
        <input type="submit" name="cerrar" value="Cerrar sesión"><br>
    </form>

    <?php 

        // Si pulsamos el botón de leer
        if (isset($_POST['leer'])){

            $fichero = "usuario.txt";

            if (file_exists($fichero)){
                // Si existe
                $file = fopen($fichero, "r");

                echo "<br>
                <table>
                    <tr>
                        <th>Correo</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                    </tr>";

                while (!fgets($file)){
                    
                    // Leer línea
                    $linea = fgets($file);

                    // Separamos los campos en un array
                    $datos_usuario = explode(',', $linea);

                    // Imprimir la tabla
                    echo "<tr>";
                    echo "<td>$datos_usuario[0]</td>";
                    echo "<td>$datos_usuario[1]</td>";
                    echo "<td>$datos_usuario[2]</td>";
                    echo "</tr>";

                }

                echo "</table>";

            }
            else {
                // Si no existe, un mensaje de error
                echo "<p>Error 404: Fichero no encontrado.</p>";
            }
        }

        // Si pulsamos el botón de cerrar
        if (isset($_POST['cerrar'])){

            // Cerramos la sesion, liberando antes las variables
            session_unset();
            session_destroy();

            // Redireccinamos a la página de login
            header("Location: login.php");
        }    

    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Agenda</h1>
    <form action="" method="post">
        <label name="nombre">Nombre: </label>
        <input type="text" name="nombre">
        <input type="submit" name="guardar" value="Guardar">
        <input type="submit" name="leer" value="Leer">   
    </form>

    <?php 

        // $nombre = array();

        // Guardar: Guarda los nombres en el array
        if (isset($_POST["guardar"])){    
            
            if (!isset($_COOKIE['lista'])){
                $_COOKIE['lista'] = array();
            }
            $listaNombres = unserialize($_COOKIE['lista']); 
            $listaNombres[count($_COOKIE['lista'])] = $_POST["nombre"];
            setcookie('lista', serialize($_POST["nombre"]), time()+15);

            // array_push($nombres, $_POST["nombre"]);
        }

        // Leer: Muestra los nombres por pantalla
        if (isset($_POST["leer"])){
            
            if (!isset($_COOKIE['lista'])){
                $_COOKIE['lista'] = array();
            }

            echo "<pre>";
            print_r($listaNombres);
            echo "</pre>";
        }


        // Cookies: 10 seg
        // Sesiones: Con botón de cerrar sesión

        /************
         *             LA CLAVE
         *  $personas = unserialize($_COOKIE['agenda])`;
         *  setcookie('agenda',serialize($personas), time()+15);
         * 
        **************/

    ?>
    
</body>
</html>
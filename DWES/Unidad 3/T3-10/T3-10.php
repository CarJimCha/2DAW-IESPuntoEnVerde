<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3-10</title>
</head>
<body>
    <pre>Escribe un programa php que realice las siguientes acciones:

- Realizar un programa que muestre los archivos que contiene "C:"
- Cambia a la carpeta c:/
- Crea un directorio "pruebas".
    - Entra en él.
    - Lista solo los archivos que contengan una "2" en el nombre. 
    - Si no hay ninguno, en php:
        - Crea un nuevo fichero
        - Introduce texto "este fichero contiene un 2 en el nombre".
        - Cierra el fichero.
        - Lista el fichero usando el filtro "contiene un 2 en el nombre".
- Lista solo los archivos que empiecen por a y terminen por z.
    - Crea un fichero en el directorio para comprobarlo (puedes hacerlo desde el sistema operativo).
- Lista solo los archivos que contengan números.
    - Crea un fichero en el directorio para comprobarlo (puedes hacerlo desde el sistema operativo).
- Lista solo los archivos de formato pdf.
    - Crea un fichero en el directorio para comprobarlo (puedes hacerlo desde el sistema operativo).
- Desde php, lee un fichero de pruebas que hayas creado y muestralo por pantalla.</pre>

    <?php
        /*******************************************************************
         * 
         *   Acceso a ficheros
         * 
         *******************************************************************/

        // Obtener el directorio actual
        $directorio = getcwd();

        // Mostrar los archivos actuales
        // echo "<p>El directorio actual es $directorio</p>";

        // Realizar un programa que muestre los archivos que contiene "C:"
        $nuevoDir = "C:";
        echo '<p>Mostramos los archivos que contiene "C:":</p>';
        echo "<pre>";
        print_r(scandir($nuevoDir));
        echo "</pre>";

        // Cambiar a C:
        if (chdir($nuevoDir)){
            echo "<p>Se ha entrado en $nuevoDir</p>";
        }
        else {
            echo "<p>No ha entrado en $nuevoDir</p>";
            echo "<p>Seguimos en el directorio" . getcwd() . "</p>";
        }

        // Crea un directorio de pruebas
        $pruebas = "C:/pruebas";
        if (is_dir("C:/pruebas")){
            echo "<p>Ya existe el directorio $pruebas</p>";
        }    
        else {
            if (mkdir("pruebas")){ 
                echo "<p>Creado el directorio $pruebas</p>";
            }
            else {
                echo "<p>Error al crear el directorio $pruebas</p>";
            }
        }

        // Entrar en él
        $pruebas = "C:/pruebas";
        if (chdir($pruebas)){
            echo "<p>Se ha entrado en $pruebas</p>";
        }
        else {
            echo "<p>No ha entrado en $pruebas</p>";
            echo "<p>Seguimos en el directorio" . getcwd() . "</p>";
        }

        // Lista solo los archivos que contengan una "2" en el nombre
        // Patrón
        $patron = "/2/";
        // Array de los ficheros
        $arrFicheros = scandir("C:/pruebas/");
        $resultados = array();

        foreach ($arrFicheros as $nomFich){
            if (preg_match($patron, $nomFich)){
                $resultados[] = $nomFich;
            }
        }
        if (!empty($resultados)){
            echo "<pre>";
            print_r($resultados);
            echo "</pre>";
        }
        
        // Si no hay ninguno
        else {
            echo "<p>Creamos un nuevo fichero porque el directorio no contiene archivos con 2 en el nombre</p>";
            
            // Crea un nuevo fichero
            if ($file = fopen("FicheroPrueba.txt", "w")){
                
                // Introducimos un mensaje
                fwrite($file, "este fichero contiene un 2 en el nombre");

                // Cerrar el fichero
                fclose($file);
            }
            else {
                echo "<p>No hemos podido crear el fichero de pruebas</p>";
            }
            
        }
        
        // Leer fichero de texto
        $fichero = "Leeme.txt";
        if (file_exists($fichero)){

            // Si existe, lo lee
            if ($file == fopen($file, 'r')){
                
                // Se lee correctamente, leo
                while (!feof($file2)){
                
                    //Se recupera una línea
                    $linea = fgets($file2);
                
                    // Se imprime una línea
                    echo "<p>$linea</p>";
                }
            }
            
            // Se cierra el fichero
            fclose($fichero);
        }

    ?>
</body>
</html>
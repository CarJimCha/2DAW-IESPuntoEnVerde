<?php 
    // Obtener el valor actual de la cookie, si existe.    
    if (isset($_COOKIE['accesos'])){
        $accesos = $_COOKIE['accesos'];
    }
    // Si no existe una cookie, la creamos.
    else {
        $accesos = 0;
        // setcookie('accesos', $accesos, time()+3); #Tiene sentido que sea aquí, peeero...
    }

    // Incrementar el contador de accesos
    $accesos++;
    setcookie('accesos', $accesos, time()+3);
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Sesiones en PHP</title>
</head>
<body>
    <h1>Control de Sesiones en PHP</h1>
    <h2>Ejemplo - Contador de accesos</h2>
    <h3>Cookies</h3>
    <p>¡Has visitado esta página <?php echo $accesos; ?> veces!</p>
    <p>Recarga esta página para aumentar el contador.</p>
    
    

</body>
</html>
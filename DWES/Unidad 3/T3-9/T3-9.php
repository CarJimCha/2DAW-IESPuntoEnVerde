<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        p.rojo {
            background-color:  red;
        }
        p.verde{
            background-color: green;
        }
    </style>
    <title>T3.9</title>
</head>
<body>
    <h1>T3.9 - Validar expresiones regulares</h1>
    <pre>Desarrollar un patrón para validar las siguientes cadenas que se solicitan:

    1. Un número negativo
    2. Número de teléfono
    3. Dni con la letra correspondiente
    4. Una dirección ip
    5. Comienza con c ó C y no tiene más de 5 caracteres
    6. Validar una variable php
    7. Contener mayúsculas en cualquier posición, excepto la primera y última
    8. Validar un dirección http ó https
    9. Validar una dirección de correo para gmail.com, outlook.es y g.educaand.es
    </pre>

    <form action="" method="post">
        <label for="texto">Escriba el texto:</label>
        <input type="text" name="texto">
        <input type="submit" name="Enviar">
    </form>

    <?php 

        if (isset($_POST["Enviar"])){
            
            // Recogemos el texto escrito en el formulario y lo mostramos
            $texto = $_POST['texto'];
            echo "<h3>El texto es: $texto</h3>";

            // Seguiremos la misma estructura en todas las opciones: 
            
            // 1. Un número negativo
            // Enunciado
            echo "<h4>1. ¿Es un número negativo?</h4>";
            
            // Comprobación
            if(preg_match_all("/^[-]\d+$/", $texto)){
                echo '<p class="verde">Sí, es un número negativo.</p>';
            }
            else {
                echo '<p class="rojo">No, no lo es.</p>';
            }


            // 2. Número de teléfono
            echo "<h4>2. ¿Es un número de teléfono?</h4>";
            if(preg_match_all("/^[+]?[3]?[4]?[689]\d{8}$/", $texto)){
                echo '<p class="verde">Sí, es un número de teléfono.</p>';
            }
            else {
                echo '<p class="rojo">No, no lo es.</p>';
            }
            
            // 3. Dni con la letra correspondiente
            echo "<h4>3. ¿Es un DNI con la letra correspondiente?</h4>";
            if(preg_match_all("/^\d{8}[A-Za-z]$/", $texto)){ //a-z por si acaso
                echo '<p class="verde">Sí, es un DNI con letra.</p>';
            }
            else {
                echo '<p class="rojo">No, no lo es.</p>';
            }

            // 4. Una dirección ip
            echo "<h4>4. ¿Es una dirección IP?</h4>";
            if(preg_match_all("/^([0-9]|[0-9]{2}|1[0-9]{2}|2[4-9][0-9]|25[0-4])\.([0-9]|[0-9]{2}|1[0-9]{2}|2[4-9][0-9]|25[0-4])\.([0-9]|[0-9]{2}|1[0-9]{2}|2[4-9][0-9]|25[0-4])\.([0-9]|[0-9]{2}|1[0-9]{2}|2[4-9][0-9]|25[0-4])$/", $texto)){
                echo '<p class="verde">Sí, es una dirección IP.</p>';
            }
            else {
                echo '<p class="rojo">No, no lo es.</p>';
            }
            
            //5. Comienza con c ó C y no tiene más de 5 caracteres
            echo "<h4>5. ¿Comienza con c ó C y no tiene más de 5 caracteres?</h4>";
            if(preg_match_all("/^[cC].{0,4}$/", $texto)){
                echo '<p class="verde">Sí, comienza con c ó C y no tiene más de 5 caracteres.</p>';
            }
            else {
                echo '<p class="rojo">No, no lo es.</p>';
            }
            
            //6. Validar una variable php
            echo "<h4>6. ¿Es una variable PHP?</h4>";
            if(preg_match_all("/^[$].+\S+$/", $texto)){
                echo '<p class="verde">Sí, es una variable PHP.</p>';
            }
            else {
                echo '<p class="rojo">No, no lo es.</p>';
            }
            
            //7. Contener mayúsculas en cualquier posición, excepto la primera y última
            // CONSEJO:
            //  ^            Principio
            //  [^A-Z]       No mayúscula
            //  .*           Cualquier cosa
            //  [A-Z]        Mayúscula
            //  .*           Cualquier cosa
            //  [^A-Z]       No mayúscula
            //  $            Fin
            echo "<h4>7. ¿Contiene mayúsculas en cualquier posición, excepto la primera y última?</h4>";
            if(preg_match_all("/^[^A-Z].*[A-Z].*[^A-Z]$/", $texto)){
                echo '<p class="verde">Sí, contiene mayúsculas excepto la primera y última posición.</p>';
            }
            else {
                echo '<p class="rojo">No, no lo es.</p>';
            }
            
            //8. Validar un dirección http ó https
            echo "<h4>8. ¿Es una dirección http ó https?</h4>";
            if(preg_match_all("/^[h][t][t][p][s]?[:][\/][\/].+$/", $texto)){ // "/^http[s]?[:]\/\/.+$/"
                echo '<p class="verde">Sí, es una dirección http ó https.</p>';
            }
            else {
                echo '<p class="rojo">No, no lo es.</p>';
            }
        
            //9. Validar una dirección de correo para gmail.com, outlook.es y g.educaand.es
            echo "<h4>9. ¿Es una dirección de correo para gmail.com, outlook.es y g.educaand.es?</h4>";
            if(preg_match_all("/^[a-zA-Z0-9.-_]*[@][gog][mu.][ate][ild][lou][.oc][cka][o.a][men][sd]?[.]?[e]?[s]?$/", $texto)){ 
                            // /^[a-zA-Z0-9.-_]*[@](google|outlook|g).(com|es|educaand)(.es)?$/
                echo '<p class="verde">Sí, es una dirección de correo para gmail.com, outlook.es y g.educaand.es.</p>';
            }
            else {
                echo '<p class="rojo">No, no lo es.</p>';
            }

        }

    ?>

</body>
</html>
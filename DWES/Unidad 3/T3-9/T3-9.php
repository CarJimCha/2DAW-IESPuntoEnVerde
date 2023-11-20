<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <?php 
        echo "<p>1. /[-]\d+/gm</p>";
        echo "<p>2. /[+]?[3]?[4]?\d{9}/gm</p>";
        echo "<p>3. /\d{8}[A-Z]/gm</p>";
        echo "<p>4. /[0-2]?\d{0,2}[.][0-2]?\d{0,2}[.][0-2]?\d{0,2}[.][0-2]?\d{0,2}/gm/gm</p>";
        echo "<p>5. /\s[cC]\w{4}/gm</p>";
        echo "<p>6. /[$]\S/gm</p>";
        echo "<p>7. /\s[a-z]+[A-Z]+[a-zA]+\W/gm</p>";
        echo "<p>8. /[h][t][t][p][s]?[:][\/][\/]/gm</p>"; // /http[s]?:\/\//gm
        echo "<p>9. /\S[@][gog][mu.][ate][ild][lou][.oc][cka][o.a][men][sd]?[.]?[e]?[s]?/gm</p>";
    ?>

</body>
</html>
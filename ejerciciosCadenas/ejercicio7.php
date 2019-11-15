        
<html>
    <head>
        <title>Ejercicios 4</title>
    </head>
    <body>
        <?php
        $findme = 'A';
        $mystring1 = 'xyz';
        $mystring2 = 'ABC';
        $pos1 = strpos($mystring1, $findme);
        $pos2 = strpos($mystring2, $findme);
        if ($pos1 === false) {
            echo "The string '$findme' was not found in the string '$mystring1'";
        } else {
            echo "We found '$findme' in '$mystring1' at position $pos1";
        }
        echo"<br/>"; // Nótese el uso de ===
        //Usar sólo == no funcionará como se espera
        // debido a que la posición de 'a' es el 0º (primer) caracter.
        if ($pos2 !== false) {
            echo "We found '$findme' in '$mystring2' at position $pos2";
        } else {
            echo "The string '$findme' was not found in the string '$mystring2'";
        }
        echo"<br/>";
        ?>
    </body>
</html>



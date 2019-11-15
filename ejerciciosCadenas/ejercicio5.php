        
<html>
    <head>
        <title>Ejercicios 5</title>
    </head>
    <body>
        <?php

        function CharEmail($email, $caracter) {
            $comprobar = strstr($email, $caracter);

            if ($comprobar == false) {
                echo "No se ha encontrado '$caracter' dentro del email";
            } else {
                echo "El caracter '$caracter' esta dentro del email";
            }
        }
        
        CharEmail("sergiboschbosch@gmail.com", "p")
        
        ?>
    </body>
</html>



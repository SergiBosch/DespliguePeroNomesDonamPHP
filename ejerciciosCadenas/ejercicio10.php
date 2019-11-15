        
<html>
    <head>
        <title>Ejercicios 4</title>
    </head>
    <body>
        <?php
        $nombreCompleto= "Bosch Bosch, Sergi";
            $apellidos = substr($nombreCompleto,0,11);
            $nombre = substr($nombreCompleto,-5,5);
            echo "Los apellidos son: $apellidos";
            echo "<br>";
            echo "El nombre es: $nombre";
            echo "<br>";
            echo "El nombre y apellidos son: $nombre $apellidos";
            echo "<br>";
        ?>
    </body>
</html>



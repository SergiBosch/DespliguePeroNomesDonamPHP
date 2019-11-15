        
<html>
    <head>
        <title>Ejercicios 1</title>
    </head>
    <body>
        <?php 
            $nombreCompleto= "Bosch Bosch, Sergi";
            $apellidos = explode(",", $nombreCompleto)[0];
            $nombre = explode(",", $nombreCompleto)[1];
            echo "Los apellidos son: $apellidos";
            echo "<br>";
            echo "El nombre es: $nombre";
            echo "<br>";
            echo "El nombre y apellidos son: $nombre $apellidos";
            echo "<br>";
            print_r(explode(",", $nombreCompleto));
            echo "<br>";
            var_dump(explode(",", $nombreCompleto));
        ?>
    </body>
</html>



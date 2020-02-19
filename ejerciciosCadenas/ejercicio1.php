        
<html>
    <head>
        <title>Ejercicios 1</title>
    </head>
    <body>
        <?php 
            $nombreCompleto= "Bosch Bosch, Sergi";
            $asignatura = explode(",", $nombreCompleto)[0];
            $codigo = explode(",", $nombreCompleto)[1];
            echo "Los apellidos son: $asignatura";
            echo "<br>";
            echo "El nombre es: $codigo";
            echo "<br>";
            echo "El nombre y apellidos son: $codigo $asignatura";
            echo "<br>";
            print_r(explode(",", $nombreCompleto));
            echo "<br>";
            var_dump(explode(",", $nombreCompleto));
        ?>
    </body>
</html>



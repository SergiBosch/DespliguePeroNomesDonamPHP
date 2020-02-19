        
<html>
    <head>
        <title>Ejercicios 4</title>
    </head>
    <body>
        <?php
        $nombreCompleto= "Bosch Bosch, Sergi";
            $asignatura = substr($nombreCompleto,0,11);
            $codigo = substr($nombreCompleto,-5,5);
            echo "Los apellidos son: $asignatura";
            echo "<br>";
            echo "El nombre es: $codigo";
            echo "<br>";
            echo "El nombre y apellidos son: $codigo $asignatura";
            echo "<br>";
        ?>
    </body>
</html>



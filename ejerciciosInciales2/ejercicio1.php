<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
        $array = array();
        $n = 15;
        $a = 200;
        $b = 250;

        for ($i = 0; $i < $n; $i++) {
            array_push($array, rand($a, $b));
        }
        echo "Bucle FOR";
        echo "<br>";
        echo "<br>";
        for ($i = 0; $i < $n; $i++) {
            echo "El elemento $i tiene el valor $array[$i]";
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Bucle WHILE";
        echo "<br>";
        echo "<br>";
        $i = 0;
        while ($i < $n) {
            echo "El elemento $i tiene el valor $array[$i]";
            echo "<br>";
            $i++;
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Crear array con funciones";

        function crearMostrarArray($n, $a, $b) {
            $array = array();
            for ($i = 0; $i < $n; $i++) {
                array_push($array, rand($a, $b));
            }
            return $array;
        }

        $arrayFuncion = crearMostrarArray(20, 300, 400);
        echo "<br>";
        print_r($arrayFuncion);
        echo "<br>";
        var_dump($arrayFuncion);
        ?>        
    </body>
</html>

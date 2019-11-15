<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php

        function matrizBidimensional($n, $m, $x, $p) {
            $array = array();
            for ($i = 0; $i < $n; $i++) {
                $array2 = array();
                for ($j = 0; $j < $m; $j++) {
                    array_push($array2, $x);
                    $x += $p;
                }
                array_push($array, $array2);
            }
            return $array;
        }

        $arraybi = matrizBidimensional(5, 7, 3, 2);
        print_r($arraybi);
        echo "<br>";
        var_dump($arraybi);
        echo "<br>";
        echo "<br>";
        echo"Recorrer matriz";
        echo "<br>";
        foreach ($arraybi as $fila => $arrayinterna) {
            foreach ($arrayinterna as $columna => $valor) {
                echo "Para la fila $fila y la columna $columna el valor es $valor";
                echo "<br>";
            }
        }
        ?>        
    </body>
</html>

        
<html>
    <head>
        <title>Ejercicios 4</title>
    </head>
    <body>
        <?php
        $frutas = array("d" => "limón", "a" => "naranja", "b" => "banana",
            "c" => "manzana");

        function test_alter(&$elemento1, $clave, $prefijo) {
            $elemento1 = "$prefijo: $elemento1";
        }

        function test_print($elemento2, $clave) {
            echo "$clave. $elemento2<br />\n";
        }

        echo "Antes ...:\n";
        array_walk($frutas, 'test_print');
        array_walk($frutas, 'test_alter', 'fruta');
        echo "... y después:\n";
        array_walk($frutas, 'test_print');
        ?>
    </body>
</html>



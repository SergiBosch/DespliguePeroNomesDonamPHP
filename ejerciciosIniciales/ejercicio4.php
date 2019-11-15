<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
        //A
        $potencia1 = pow(2, 20);
        $potencia2 = pow(4, 16);
        echo "2^20 = $potencia1 y 4^16 = $potencia2";
        //B
        echo "<br>";
        echo "El numero entero mas grande es ".PHP_INT_MAX." ocupando ".PHP_INT_SIZE." bytes";
        //C
        echo "<br>";
        $sobrepasar=PHP_INT_MAX + 1;
        echo "Sobre pasamos el numero maximo $sobrepasar";
        //D
        echo "<br>";
        $max_real=10**308;
        $toomuch_real=10**309;
        echo "El maximo numero real es $max_real y si lo sobrepasamos pasa esto $toomuch_real";
        ?>        
    </body>
</html>

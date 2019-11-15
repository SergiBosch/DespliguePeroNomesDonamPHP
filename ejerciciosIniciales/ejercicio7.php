        
<html>
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php 
        //A
        echo "El numero 3.5 redondeado es: ". round(3.5).", el numero 4 redondeado es: ".round(4)." y el numero -12.36 redondeado es ". round(-12.36);
        //B
        echo "<br>";
        echo "Pi: ". round(pi(), 4);
        //C
        echo "<br>";
        echo "Redondear el numero 2.5 por arriba ".ceil(2.5)." y por abajo ". floor(2.5);
        echo "<br>";
        echo "Redondear el numero 2.6 por arriba ".ceil(2.6)." y por abajo ". floor(2.6);
        echo "<br>";
        echo "Redondear el numero -3.1 por arriba ".ceil(-3.1)." y por abajo ". floor(-3.1);
        //D
        $numero = [5, 8, 12, 06, 4.5, 78, 0.1];
        echo "<br>";
        echo "El valor maximo de la array \$numero es ". max($numero)." y el minimo ". min($numero);
        //E
        echo "<br>";
        echo "Formatear el numero 123456789.1234 ". number_format(123456789.1234,2,",",".");
        //F
        echo "<br>";
        echo "Numero aleatorio: ".mt_rand()." el maximo numero posible es ". mt_getrandmax()."(mt_getrandmax) ". getrandmax()."(getrandmax)";
        //G
        echo "<br>";
        echo "Numero aleatorio entre 10 y 6789: ". rand(10, 6789)."(rand) ". mt_rand(10, 6789)."(mt_rand)";
                //H
        echo "<br>";
        echo "Numero aleatorio entre superando el maximo valor entero: ". rand(PHP_INT_MAX, PHP_INT_MAX+6789)."(rand) ". mt_rand(PHP_INT_MAX, PHP_INT_MAX+6789)."(mt_rand)";
        ?>
    </body>
</html>



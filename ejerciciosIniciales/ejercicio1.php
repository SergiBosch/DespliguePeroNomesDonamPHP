<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
        $frutas = array("naranja", "uva", "manzana", "pera", "fresa", "melon");
        print "Estas son las frutas que hay dentro de la array";
        echo "<br>";
        print $frutas[0];
        echo "<br>";
        print $frutas[1];
        echo "<br>";
        print $frutas[2];
        echo "<br>";
        print $frutas[3];
        echo "<br>";
        print $frutas[4];
        echo "<br>";
        print $frutas[5];
        echo "<br>";
        echo "<br>";
        echo "<br>";
        print "Recorremos las frutas con un bucle";
        foreach ($frutas as $fruta) {
            echo "<br>";
            print $fruta;
        }
        ?>        
    </body>
</html>

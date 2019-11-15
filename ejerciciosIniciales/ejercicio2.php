<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
<?php

$arraybi = array(array("uno","dos","tres"),array("quatro","cinco","seis"),array("siete","ocho","nueve"));
print "Contenido de la array bidimensional:";
print "<br>";
print $arraybi[0][0];
print "<br>";
print $arraybi[0][1];
print "<br>";
print $arraybi[0][2];
print "<br>";
print $arraybi[1][0];
print "<br>";
print $arraybi[1][1];
print "<br>";
print $arraybi[1][2];
print "<br>";
print $arraybi[2][0];
print "<br>";
print $arraybi[2][1];
print "<br>";
print $arraybi[2][2];
print "<br>";
print "Recorremos la array en un bucle";
foreach ($arraybi as $arrayinterna) {
    foreach ($arrayinterna as $numero) {
        print "<br>";
        print $numero;
    }
}
?>        
    </body>
</html>
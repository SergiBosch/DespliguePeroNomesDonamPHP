<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
        $frutas = array("naranja", "uva", "manzana", "pera", "fresa", "melon");
        echo "<div class=\"array\">";
        foreach ($frutas as $value) {
            echo "<div class=\"elemento\" style=\"color:green;border:solid 1px black; width:100px;\">";
            echo $value;
            echo "</div>";
        }

        echo "</div>";
        ?>        
    </body>
</html>

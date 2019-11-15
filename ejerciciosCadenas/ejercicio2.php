        
<html>
    <head>
        <title>Ejercicios 2</title>
    </head>
    <body>
        <?php
        $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
        $pieces = explode(" ", $pizza);
        for ($i = 0; $i < sizeof($pieces); $i++) {
            echo $pieces[$i];
            echo "<br>";
        }
        ?>
    </body>
</html>



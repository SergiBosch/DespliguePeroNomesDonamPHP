        
<html>
    <head>
        <title>Ejercicios 3</title>
    </head>
    <body>
        <?php
        $str = 'one|two|three|four|five|six|seven|eight|nine|ten';
        // positive limit
        print_r(explode('|', $str, 5));
        echo "<br>";
        print_r(explode('|', $str, -2));
        ?>
    </body>
</html>



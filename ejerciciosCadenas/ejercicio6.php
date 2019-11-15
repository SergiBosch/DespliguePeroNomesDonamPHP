        
<html>
    <head>
        <title>Ejercicios 4</title>
    </head>
    <body>
        <?php
        // obtiene todo lo que está después de la última nueva línea
        $text = "Line 1\nLine 2\nLine 3";
        $last = substr(strrchr($text, 10), 1);
        echo $last; //Devuelve Line 3
        echo"<br/>";
        $last = substr(strrchr($text, "\n"), 1);
        echo $last; //Devuelve Line 3
        echo"<br/>";
        
        
        ?>
    </body>
</html>



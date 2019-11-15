        
<html>
    <head>
        <title>Ejercicio 6</title>
    </head>
    <body>
        <form action="<?php $_SERVER[PHP_SELF]?>">
            <input type="text" name="campo1">
            <input type="text" name="campo2">
            <input type="submit" value="Submit">

        </form>
        <?php 
        print_r($_REQUEST);
        ?>
    </body>
</html>



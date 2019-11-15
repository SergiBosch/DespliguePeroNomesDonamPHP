        
<html>
    <head>
        <title>Ejercicios 4</title>
    </head>
    <body>
        <?php
        $email = 'name@example.com';
        $comprobar = strstr($email, 's');
        
        if ($comprobar == false){
            echo "No ha encontrado ‘s’ dentro del email";
        }
        ?>
    </body>
</html>



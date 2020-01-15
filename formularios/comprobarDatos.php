<html>
    <head>

    </head>
    <body>

        <?php
        echo "<h3>Comprobacion de cajas de texto</h3>";

        foreach ($_REQUEST as $key => $value) {
            if ($value){
                echo "Su <strong>$key</strong> es <strong>$value</strong><br>";
            } else {
                echo "No se ha escrito ningun $key<br>";
            }
            
        }

        echo "<h3>Comprobacion de radio y checkbox</h3>";
        
        if (!isset($_REQUEST['radio'])) {
            echo "No se ha enviado el control de radio opinion<br>";
        } else{
            echo "Se ha enviado el control de radio opinion<br>";
        }
        if (!isset($_REQUEST['seccion1'])) {
            echo "No se ha marcado seccion1<br>";
        } else{
            echo "Se ha marcado seccion1<br>";
        }
        if (!isset($_REQUEST['seccion2'])) {
            echo "No se ha marcado seccion2<br>";
        } else{
            echo "Se ha marcado seccion2<br>";
        }
        if (!isset($_REQUEST['seccion3'])) {
            echo "No se ha marcado seccion3<br>";
        } else{
            echo "Se ha marcado seccion3<br>";
        }


        echo "<h3>Informacion de los ficheros</h3>";

        if ($_FILES['fichero1']['error']==0) {
            echo print_r($_FILES['fichero1']);
        } else{
            echo "No se ha enviado el fichero1";
        }
        echo '<br>';
        if ($_FILES['fichero2']['error']==0) {
            echo print_r($_FILES['fichero2']);
        } else{
            echo "No se ha enviado el fichero2";
        }
        echo '<br>';
        if ($_FILES['fichero3']['error']==0) {
            echo print_r($_FILES['fichero3']);
        } else{
            echo "No se ha enviado el fichero3";
        }

        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
        ?>

    </body>
</html>
<html>
    <head>

    </head>
    <body>

        <?php
        //1
        echo "<h3>Array de variables enviadas</h3>";

        echo print_r($_REQUEST);

        echo "<h3>variables enviadas</h3>";

        foreach ($_REQUEST as $key => $value) {
            echo "La variable <strong>$key</strong> toma el valor <strong>$value</strong><br>";
        }

        echo "<h3>variables de los ficheros enviados</h3>";

        echo print_r($_FILES);

        echo "<h3>variables de los ficheros enviados</h3>";

        foreach ($_FILES as $keyFile => $file) {
            foreach ($file as $key => $value) {
                echo "El fichero <strong>$keyFile</strong> la variable <strong>$key</strong> toma el valor <strong>$value</strong><br>";
            }
        }
        //2
        $directorio = './directorio_archivos_movidos/';
        if (!is_dir($directorio)) {
            mkdir($directorio, 0777, true);
        }
        //3 y 4
        echo "<h3>Ficheros enviados</h3>";
        foreach ($_FILES as $keyFile => $file) {
            if (is_uploaded_file($_FILES[$keyFile]['tmp_name'])) {
                $nombreDirectorio = $directorio;
                $nombreFichero = $_FILES[$keyFile]['name'];
                $nombreCompleto = $nombreDirectorio . $nombreFichero;
                if (is_file($nombreCompleto)) {
                    $idUnico = time();
                    $nombreFichero = $idUnico . "-" . $nombreFichero;
                }
                move_uploaded_file($_FILES[$keyFile]['tmp_name'], $nombreDirectorio . $nombreFichero);
                echo "Exito al subir el archivo $keyFile<br>";
            } else {
                echo "Fallo al subir el archivo $keyFile<br>";
            }
        }



        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
        ?>

    </body>
</html>
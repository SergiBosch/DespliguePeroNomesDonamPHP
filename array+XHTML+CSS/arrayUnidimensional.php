<html>
    <head>

    </head>
    <body>
        <?php
        /*
         * Práctica 1 (Array Unidimensional + CSS)
          a) Realizar una función crearArray que cree y devuelva un array unidimensional
          asociativo $V de n elementos, cuyo índice sea Xi, y donde i tome un valor aleatorio
          comprendido entre ind1 e ind2 (fº rand). Posteriormente se le asigna un valor a Xi
          comprendido entre val1 y val2( fº rand). El número de elementos del array será 5 por
          defecto. La función también devolverá el valor más grande.
         * 

          b) Crear un array $arrayNew para índices entre 10 y 25, y valores entre 100 y 200 con
          8 elementos. Posteriormente mostrar la estructura del array con print_r().
         * 
          c) Realizar una función mostrarArray, que muestre un array unidimensional
          asociativo como se muestra en el ejemplo:
          donde la tabla posea:
          o Bordes colapsados
          o Los elementos e índices estén centrados.
          o la tabla esté centrada en mitad de la página.
          o Los bordes serán de 2px y del color a elegir.
          o Mostrar el valor mayor del elemento al final de la tabla.
          o El elemento máximo tendrá el color de fondo a elegir.
          o Los valores por defecto para bordes es blue y para fondo de celda de
          valor máximo orange.

          Mostrar el array $arrayNew.
         * 
          d) Realizar una función eliminarMaximoIndice, que muestre y devuelva el array
          resultante de borrar el elemento de índice mayor. Usar la función mostrarArray.
          Eliminar el elemento de índice mayor de $arrayNew.
         * 
          e) Realizar una función ordenarArrayIndice, que ordene por índice y muestre el array.
          Usar la función mostrarArray.
          Ordenar por índice el array $arrayNew.
         * 
          f) Realizar una función ordenarValorArray, que ordene por valor y muestre el array.
          Usar la función mostrarArray.
          Ordenar por Valor el array $arrayNew.
         */

        function crearArray($v = 5, $ind1, $ind2, $val1, $val2) {
            $array = array();
            for ($g = 0; count($array) < $v; $g++) {
                $array["X" . rand($ind1, $ind2)] = rand($val1, $val2);
            }
            $a[0] = $array;
            $a[1] = max($array);
            return $a;
        }

        function mostrarArray($array, $colorBorder="blue", $destacadoColor="orange") {
            echo "<table style=\"margin: auto; border-collapse: collapse;\">";
            echo "<tr>";
            foreach ($array[0] as $clave => $valor) {
                echo "<td style=\"padding: 0 10px; border: 2px solid $colorBorder;\">$valor</td>";
            }
            echo "<td style=\"padding: 0 10px; border: 2px solid $colorBorder; background-color: $destacadoColor;\">$array[1]</td>";
            echo "</tr>";
            echo "<tr>";
            foreach ($array[0] as $clave => $valor) {
                echo "<td style=\"padding: 0 10px;\">$clave</td>";
            }
            echo "</tr>";
            echo "</table>";
        }
        
        function eliminarMaximoIndice($array){
            foreach ($array[0] as $clave => $valor) {
                if($valor == $array[1]){
                    $borrable = $clave;
                }
            }
            unset($array[0][$borrable]);
            $a[0] = $array[0];
            $a[1] = max($array[0]);
            return $a;
        }
        
        function ordenarArrayIndice($array){
            ksort($array[0]);
            return $array;
        }
        
        function ordenarArrayValor($array){
            asort($array[0]);
            return $array;
        }

        $arrayNew = crearArray(8, 10, 25, 100, 200);
        print_r($arrayNew);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        mostrarArray($arrayNew);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $arrayNew = eliminarMaximoIndice($arrayNew);
        mostrarArray($arrayNew);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $arrayNew = ordenarArrayIndice($arrayNew);
        mostrarArray($arrayNew);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $arrayNew = ordenarArrayValor($arrayNew);
        mostrarArray($arrayNew);
        ?>
    </body>
</html>
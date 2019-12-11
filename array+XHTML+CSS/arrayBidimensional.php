<?php

function crearMatriz($filas, $columnas, $val, $incremento) {
    $array = array();
    $total = $val;

    for ($i = 1; $i <= $filas; $i++) {
        $array["X" . $i] = array();
        for ($j = 1; $j <= $columnas; $j++) {
            $arrayInterno["Y" . $j] = $total;
            $total += $incremento;
        }
        array_push($array["X" . $i], $arrayInterno);
    }
    return $array;
}

$mat = crearMatriz(3, 2, 3, 2);

function mostrarArray($array) {
    foreach ($array as $keyExterna => $arrayInterno) {
        foreach ($arrayInterno[0] as $keyInterna => $value) {
            echo "Para el indice $keyExterna e indice $keyInterna tiene el Valor: $value";
            echo "<br>";
        }
    }
}

mostrarArray($mat);

function dibujarMatriz($array, $colorBorder = "blue", $destacadoColor = "orange") {
    echo "<table style=\"margin: auto; border-collapse: collapse;\">";
    foreach ($array as $keyExterna => $arrayInterno) {
        echo "<tr>";
        echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">$keyExterna</td>";
        foreach ($arrayInterno[0] as $keyInterna => $value) {
            echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

dibujarMatriz($mat);
echo "<br>";
function dibujarMatriz2($array, $colorBorder = "red", $destacadoColor = "lightgreen") {
    echo "<table style=\"margin: auto; border-collapse: collapse;\">";
    echo "<tr>";
        echo "<td></td>";
        echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">Y1</td>";
        echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">Y2</td>";
        echo "</tr>";
    foreach ($array as $keyExterna => $arrayInterno) {
        echo "<tr>";        
        echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">$keyExterna</td>";
        foreach ($arrayInterno[0] as $keyInterna => $value) {
            echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

dibujarMatriz2($mat);
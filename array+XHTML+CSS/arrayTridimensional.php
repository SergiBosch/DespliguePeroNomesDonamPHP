<?php

function crearArrayTri($X, $Y, $Z, $val, $incremento) {
    $total = $val;

    for ($i = 1; $i <= $Z; $i++) {
        $arrayZ["Z" . $i] = array();
        for ($j = 1; $j <= $X; $j++) {
            $arrayX["X" . $j] = array();
            for ($h = 1; $h <= $Y; $h++) {
                $arrayY["Y" . $h] = $total;
                $total += $incremento;
            }
            array_push($arrayX["X" . $j], $arrayY);
        }
        array_push($arrayZ["Z" . $i], $arrayX);
    }
    return $arrayZ;
}

$mat = crearArrayTri(3, 4, 2, 4, 2);

function mostrarArray($arrayZ) {
    foreach ($arrayZ as $keyZ => $arrayX) {
        foreach ($arrayX[0] as $keyX => $arrayY) {
            foreach ($arrayY[0] as $keyY => $value) {
                echo "Para el índice $keyX,índice $keyY e índice $keyZ tiene el Valor: $value";
                echo "<br>";
            }
        }
    }
}

mostrarArray($mat);

echo "<br>";

function dibujarMatriz2($arrayZ, $colorBorder = "red", $destacadoColor = "lightgreen") {
    foreach ($arrayZ as $keyZ => $arrayX) {
        echo "<table style=\"margin: auto; border-collapse: collapse;\">";
        echo "<tr>";
        echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">$keyZ</td>";
        echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">Y1</td>";
        echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">Y2</td>";
        echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">Y3</td>";
        echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">Y4</td>";
        echo "</tr>";
        foreach ($arrayX[0] as $keyX => $arrayY) {
            echo "<tr>";
            echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">$keyX</td>";
            foreach ($arrayY[0] as $keyY => $value) {
                echo "<td style=\"padding: 0 50px; border: 2px solid $colorBorder; ; background-color: $destacadoColor;\">$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
    }
}

dibujarMatriz2($mat);
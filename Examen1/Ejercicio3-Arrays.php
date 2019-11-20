<?php
//A
function crearArray($V = 5, $indice1, $indice2, $operadorIndice, $valor1, $valor2, $operadorValor) {
    $array = array();
    $indice = rand($indice1, $indice2);
    $valor = rand($valor1, $valor2);
    if($operadorValor == "+"){
        $valorPeque = $valor;
    }
    while (count($array) < $V) {
        $array["A" .$indice ] = $valor;
        if($operadorIndice == "+"){
            $indice += $indice1;
        }else{
            $indice -= $indice1;
        }
        if($operadorValor == "+"){
            $valor += $valor1;
        }else{
            $valorPeque = $valor;
            $valor -= $valor1;

        }
    }
    $D[0] = $array;
    $D[1] = $operadorIndice;
    $D[2] = $operadorValor;
    $D[3] = $valorPeque; 
    return $D;
}
//B
$mat = crearArray(6,10,15,"-",100,200,"+");
print_r($mat);
echo "<br>";
//C
function mostrarArray($array, $colorBorder="blue", $destacadoColor="orange") {
            echo "<table style=\"margin: auto; border-collapse: collapse;\">";
            echo "<tr>";
            echo "<td style=\"padding: 0 10px; border: 2px solid $colorBorder; background-color: $destacadoColor;\">$array[2]</td>";
            foreach ($array[0] as $clave => $valor) {
                echo "<td style=\"padding: 0 10px; border: 2px solid $colorBorder;\">$valor</td>";
            }
            echo "<td style=\"padding: 0 10px; border: 2px solid $colorBorder; background-color: $destacadoColor;\">$array[3]</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td style=\"padding: 0 10px; border: 2px solid $colorBorder; background-color: $destacadoColor;\">$array[1]</td>";
            foreach ($array[0] as $clave => $valor) {
                echo "<td style=\"padding: 0 10px;\">$clave</td>";
            }
            echo "</tr>";
            echo "</table>";
}
mostrarArray($mat, "yellow", "red");
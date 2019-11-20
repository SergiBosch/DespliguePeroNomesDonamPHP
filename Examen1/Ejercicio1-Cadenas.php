<?php

function nombreApellidos($nombreCompleto) {
    $nombre = trim(explode(",", $nombreCompleto)[1]);
    $apellidos = trim(explode(",", $nombreCompleto)[0]);
    $totalChar = strlen(trim(explode(" ", $apellidos)[0])) + strlen(trim(explode(" ", $apellidos)[1]));
    $arrayInfo = array(
        array(
            $nombre,
            strlen($nombre)
        ),
        array(
            $apellidos,
            $totalChar
        ),
        array(
            $nombreCompleto,
            strlen($nombre) + $totalChar
        )
    );
    return $arrayInfo;
}

function mostrarArray($arrayAsociativoBidimensional){
    foreach ($arrayAsociativoBidimensional as $key => $arrayInterno) {
        foreach ($arrayInterno as $key => $value) {
            echo $value;
        }
        echo "<br>";
    }
}

function mostrarNombreApellidos($nombreCompleto){
    mostrarArray(nombreApellidos($nombreCompleto));
}
mostrarNombreApellidos("Bosch Bosch, Sergi");
?>
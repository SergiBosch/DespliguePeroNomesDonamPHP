<?php

/*
 * a) Crear la matriz asociativa notasAlumnos y muestra su estructura de array. 
 * 
 * b) Realizar la función mostrarNotasAlumnos, para que muestre las notas por cada 
 * alumno y asignatura de la siguiente manera: 
 * 
 * El alumno AL1 de la asignatura DAW ha obtenido un 7
 * El alumno AL1 de la asignatura DIW ha obtenido un 8 
 * 
 * Realizar la llamada correspondiente para un alumno dado. 
 * 
 * d) Realizar la función Mostrar_NotaMasAlta_Alumno, que nos devuelva
 * la nota más alta obtenida por un alumno dado.
 * Realizar la llamada correspondiente a la función y mostrar lo que devuelve
 */

echo "Ejercicio Array Bidimensional Asociativo<br>";
echo "<br>";

$notasAlumnos = array(
    "AL1" => array(
        "DAW" => 7, "DIW" => 8, "DWS" => 8, "DWC" => 7),
    "AL2" => array(
        "DAW" => 6, "DIW" => 5, "DWS" => 4, "DWC" => 3),
    "AL3" => array(
        "DAW" => 8, "DIW" => 8, "DWS" => 8, "DWC" => 9),
    "AL4" => array(
        "DAW" => 4, "DIW" => 3, "DWS" => 3, "DWC" => 6)
);

print_r($notasAlumnos);

echo "<br>";
echo "<br>";

function mostrarNotasAlumnos($notas) {
    foreach ($notas as $key => $value) {
        foreach ($value as $key1 => $value1) {
            echo "El alumno " . $key . " de la asignatura " . $key1 . " ha obtenido un " . $value1 . "<br>";
        }
    }
}

echo mostrarNotasAlumnos($notasAlumnos);

echo "<br>";
echo "<br>";

$alumnoElegido = "AL1";

function mostrarNotasAlumno($alumno, $array) {
    foreach ($array as $key2 => $value2) {
        if ($key2 == $alumno) {
            foreach ($value2 as $key3 => $value3) {
                echo "El alumno " . $key2 . " de la asignatura " . $key3 . " ha obtenido un " . $value3 . "<br>";
            }
        }
    }
}

echo mostrarNotasAlumno($alumnoElegido, $notasAlumnos);

echo "<br>";
echo "<br>";

$alumnoElegido2 = "AL2";

function mostrar_NotaMasAlta_Alumno($alumno1, $arrayNotas) {
    foreach ($arrayNotas as $clave => $valor) {
        if ($clave == $alumno1) {
            list(, $valor1) = each($valor);
            $max = $valor1;
            foreach ($valor as $clave1 => $valor2) {
                if ($max < $valor2) {
                    $max = $valor2;
                    $asig = $clave1;
                } else {
                    $max = $max;
                    $asig = $clave1;
                }
            }
        }
    }
    return "La nota mas alta obtenida por el alumno " . $alumno1 . " ha sido en la asignatura " . $asig . " con un " .  $max ;
}

echo mostrar_NotaMasAlta_Alumno($alumnoElegido2, $notasAlumnos);
?>
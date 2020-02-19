<?php

function tiempoEntreFechas($fechaInicio, $fechaFin, $dato) {
    $fechaInicio2 = strtotime($fechaInicio);
    $fechaFin2 = strtotime($fechaFin);
    $diff = abs($fechaFin2 - $fechaInicio2);
    switch ($dato) {
        case "s":
            $diferencia = round($diff, 2);
            break;
        case "m":
            $diferencia = round($diff / (60), 2);
            break;
        case "h":
            $diferencia = round($diff / (60 * 60), 2);
            break;
        case "d":
            $diferencia = round($diff / (60 * 60 * 24), 2);
            break;
        case "me":
            $diferencia = round($diff / (30 * 60 * 60 * 24), 2);
            break;
        case "a":
            $diferencia = round($diff / (365 * 60 * 60 * 24), 2);
            break;
        case "de":
            $diferencia = round($diff / (10 * 365 * 60 * 60 * 24), 2);
            break;
        case "si":
            $diferencia = round($diff / (10 * 10 * 365 * 60 * 60 * 24), 2);
            break;
    }
    return $diferencia;
}

echo "<p>La cantidad de segundos entre el 01-01-1990 y 01-01-2000 son " . tiempoEntreFechas("01-01-1990", "01-01-2000", "s") . " segundo/s</p>";
echo "<p>La cantidad de segundos entre el 01-01-1990 y 01-01-2000 son " . tiempoEntreFechas("01-01-1990", "01-01-2000", "m") . " minuto/s</p>";
echo "<p>La cantidad de segundos entre el 01-01-1990 y 01-01-2000 son " . tiempoEntreFechas("01-01-1990", "01-01-2000", "h") . " hora/s</p>";
echo "<p>La cantidad de segundos entre el 01-01-1990 y 01-01-2000 son " . tiempoEntreFechas("01-01-1990", "01-01-2000", "d") . " dia/s</p>";
echo "<p>La cantidad de segundos entre el 01-01-1990 y 01-01-2000 son " . tiempoEntreFechas("01-01-1990", "01-01-2000", "me") . " mes/es</p>";
echo "<p>La cantidad de segundos entre el 01-01-1990 y 01-01-2000 son " . tiempoEntreFechas("01-01-1990", "01-01-2000", "a") . " año/s</p>";
echo "<p>La cantidad de segundos entre el 01-01-1990 y 01-01-2000 son " . tiempoEntreFechas("01-01-1990", "01-01-2000", "de") . " decada/s</p>";
echo "<p>La cantidad de segundos entre el 01-01-1990 y 01-01-2000 son " . tiempoEntreFechas("01-01-1990", "01-01-2000", "si") . " siglo/s</p>";

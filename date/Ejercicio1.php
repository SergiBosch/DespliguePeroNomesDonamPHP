<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
date_default_timezone_set("Europe/Madrid");

echo "Ejercicio 1 - USAR LA FUNCIÓN date() <br /> <br /> <br />";

echo "1. El año actual es: ".date("Y")."<br/>";
echo "2. La fecha y hora (24h) es: ".date("d/m/y H:i:s")."<br/>";
echo "3. Hoy es: ".date("l").", ".date("d")." de ".date("F")." de ".date("Y")."<br/>";
echo "4. Fecha completa formato RFC2822 es:  ".date(r)."<br/>";
echo "5. Fecha completa formato ISO 8061 es: ".date(c)."<br/>";
echo "6. El mes de ".date(F)." tiene: ".date(t)."<br/>";
echo "7. El número del día ".date("l")." de la semana es:  ".date(N)."(N)<br/>";
echo "8. El número del día ".date("l")." de la semana es:  ".date(w)."(w)<br/>";
echo "9. El número del día del año ".date("Y")." es:  ".date(z)."<br/>";
echo "Vamos a ver las horas:<br/>";
echo "10. La hora en 24h y con ceros delante:  ".date("H:i:s")."<br/>";
echo "11. La hora en 24h y sin ceros delante:  ".date("G:i:s")."<br/>";
echo "12. La hora en 12h y con ceros delante:   ".date("h:i:s")."<br/>";
echo "13. La hora en 12h y sin ceros delante:  ".date("g:i:s")."<br/>";

echo " <br /> <br /> Ejercicio2 - USAR LA FUNCIÓN strftime()  <br /> <br /> <br />";
echo "Ejemplo 1: ". strftime("%A, %d de %B de %Y")."<br/>";
echo "Ejemplo 2: ". strftime("%a, %d de %m de %y")."<br/>";
echo "Ejemplo 3: ". strftime("%A, %d de %b de %y")."<br/>";
echo "Ejemplo 4: ".strftime("%H : %M : %S")."<br/>";
echo "Ejemplo 5: ".strftime("%I : %M : %S")."<br/>";
echo "Ejemplo 6: ".strftime("%c")."<br/>";
echo "Ejemplo 7: ".strftime("%x")."<br/>";
echo "Ejemplo 8: ".strftime("%X")."<br/>";

echo " <br /> <br /> Ejercicio 3 - checkdate()  <br /> <br /> <br />";
if(checkdate(2, 29, 2020)){
    echo "La fecha 29/02/2020 existe <br />";
}else{
    echo "La fecha 29/02/2020 no existe <br />";
};
if(checkdate(2, 29, 2029)){
    echo "La fecha 29/02/2029 existe <br />";
}else{
    echo "La fecha 29/02/2029 no existe <br />";
};

echo " <br /> <br /> Ejercicio 4  <br /> <br /> <br />";

function anyosDeVida($dia, $mes, $anyo) {
    $fechaNacimiento = mktime(00,00,00,$dia,$mes,$anyo);
    $fechaHoy = mktime();
    $diff = abs($fechaHoy - $fechaNacimiento);  
    $years = floor($diff / (365*60*60*24))+1;  
    return $years;
}

echo "La cantidad de años entre mi fecha de nacimiento 22/09/1998 y la fecha de hoy ".date("d/m/Y")." es: ".anyosDeVida(22,9,1998)." años.";

echo " <br /> <br /> Ejercicio 5  <br /> <br /> <br />";

function tiempoDeVida($dia, $mes, $anyo, $dato) {
    $fechaNacimiento = mktime(00,00,00,$dia,$mes,$anyo);
    $fechaHoy = mktime();
    $diff = abs($fechaHoy - $fechaNacimiento);  
    if($dato == "d"){
        $diferencia = floor($diff / (60*60*24))+365;  
    }else if($dato == "m"){
        $diferencia = floor($diff / (30*60*60*24))+12;  
    }else if($dato == "a"){
        $diferencia = floor($diff / (365*60*60*24))+1;  
    }else {
        $diferencia = "Eleja una de las opciones";  
    }
    
    return $diferencia;
}

echo "La cantidad de días entre el 22/09/1998 y ".date("d/m/Y")." son ". tiempoDeVida(22,9,1998, "d")." días<br/>";
echo "La cantidad de días entre el 22/09/1998 y ".date("d/m/Y")." son ". tiempoDeVida(22,9,1998, "m")." meses<br/>";
echo "La cantidad de días entre el 22/09/1998 y ".date("d/m/Y")." son ". tiempoDeVida(22,9,1998, "a")." años<br/>";

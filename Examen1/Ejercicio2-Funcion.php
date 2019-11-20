<?php

$a["fruta"] = array("m"=>"manzana","n"=>"naranja","k"=>"kiwi");
$a["numeracion"] = array(3 =>"tres", 12=>"doce", 5=>"cinco");
array_walk($a, "myFunction" , "nos da como valor");

function myFunction($elemento, $clave, $prefijo){
    foreach ($elemento as $key => $value) {
        echo "Para la $clave: $key $prefijo $value<br>";
    }
}

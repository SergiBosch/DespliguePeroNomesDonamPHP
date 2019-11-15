<?php

function mi_funcion()
{
echo "Mi función ha sido invocada"; //instrucciones
return;
}
echo "mi funcion con return:";
echo mi_funcion();
echo "<br><br><br>";
function mi_funcion2()
{
echo "Mi función ha sido invocada"; //instrucciones
}
echo "mi funcion sin return:";
echo mi_funcion2();
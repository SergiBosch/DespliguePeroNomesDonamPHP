<?php
// Bases de datos Biblioteca - listar.php

require_once "biblioteca.php";

$db = conectaDb();
cabecera("Listar Asignatura", MENU_VOLVER);

$consulta = "SELECT COUNT(*) FROM $dbTabla2";
$result = $db->query($consulta);
if (!$result) {
    print "      <p>Error en la consulta.</p>\n";
} elseif ($result->fetchColumn() ==0 ) {
    print "      <p>No se ha creado todavía ningún registro.</p>\n";
} else {
    $consulta = "SELECT * FROM $dbTabla2";
    $result = $db->query($consulta);
    if (!$result) {
        print "      <p>Error en la consulta.</p>\n";
    } else {
        print "      <p>Listado completo de registros:</p>\n";
        print "\n";
        print "      <table class=\"conborde franjas\">\n";
        print "        <thead>\n";
        print "          <tr>\n";
        print "            <th>Nombre</th>\n";
        print "            <th>Apellidos </th>\n";
        print "          </tr>\n";
        print "        </thead>\n";
        print "        <tbody>\n";
        foreach ($result as $valor) {
            print "          <tr>\n";
            print "            <td>$valor[codigo]</td>\n";
            print "            <td>$valor[asignatura]</td>\n";
            print "          </tr>\n";
        }
        print "        </tbody>\n";
        print "      </table>\n";
    }
}

$db = null;
pie();

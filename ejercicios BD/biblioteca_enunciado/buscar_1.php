<?php
// Bases de datos Biblioteca - buscar_1.php

require_once "biblioteca.php";

$db = conectaDb();
cabecera("Buscar 1", MENU_VOLVER);

$consulta = "SELECT COUNT(*) FROM $dbTabla";
$result = $db->query($consulta);
if (!$result) {
    print "      <p>Error en la consulta.</p>\n";
} elseif ($result->fetchColumn() == 0) {
    print "      <p>No se ha creado todavía ningún registro.</p>\n";
} else {
    print "      <form action=\"buscar_2.php\" method=\"" . FORM_METHOD . "\">\n";
    print "        <p>Escriba el criterio de búsqueda (caracteres o números):</p>\n";
    print "\n";
    print "        <table>\n";
    print "          <tbody>\n";
    print "            <tr>\n";
    print "              <td>Nombre:</td>\n";
    print "              <td><input type=\"text\" name=\"nombre\" size=\"$tamNombre\" maxlength=\"$tamNombre\" autofocus=\"autofocus\" /></td>\n";
    print "            </tr>\n";
    print "            <tr>\n";
    print "              <td>Apellidos:</td>\n";
    print "              <td><input type=\"text\" name=\"apellidos\" size=\"$tamApellidos\" maxlength=\"$tamApellidos\" /></td>\n";
    print "            </tr>\n";
    print "            <tr>\n";
    print "              <td>Email:</td>\n";
    print "              <td><input type=\"text\" name=\"email\" size=\"$tamEmail\" maxlength=\"$tamEmail\" /></td>\n";
    print "            </tr>\n";
    print "            <tr>\n";
    print "              <td>Telefono:</td>\n";
    print "              <td><input type=\"text\" name=\"telefono\" size=\"$tamTelefono\" maxlength=\"$tamTelefono\" /></td>\n";
    print "            </tr>\n";
    print "          </tbody>\n";
    print "        </table>\n";
    print "\n";
    print "        <p>\n";
    print "          <input type=\"submit\" value=\"Buscar\" />\n";
    print "          <input type=\"reset\" value=\"Reiniciar formulario\" />\n";
    print "        </p>\n";
    print "      </form>\n";
}

pie();

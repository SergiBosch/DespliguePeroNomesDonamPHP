<?php
// Bases de datos Biblioteca - insertar_1.php

require_once "biblioteca.php";

$db = conectaDb();
cabecera("Añadir 1", MENU_VOLVER);

$consulta = "SELECT COUNT(*) FROM $dbTabla";
$result = $db->query($consulta);
if (!$result) {
    print "      <p>Error en la consulta.</p>\n";
} elseif ($result->fetchColumn() >= MAX_REG_TABLA) {
    print "      <p>Se ha alcanzado el número máximo de registros que se pueden guardar.</p>\n";
    print "      <p>Por favor, borre algún registro antes.</p>\n";
} else {
    print "      <form action=\"insertar_2.php\" method=\"" . FORM_METHOD . "\">\n";
    print "        <p>Escriba los datos del nuevo registro:</p>\n";
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
    print "          <input type=\"submit\" value=\"Añadir\" />\n";
    print "          <input type=\"reset\" value=\"Reiniciar formulario\" />\n";
    print "        </p>\n";
    print "      </form>\n";
}

$db = null;
pie();

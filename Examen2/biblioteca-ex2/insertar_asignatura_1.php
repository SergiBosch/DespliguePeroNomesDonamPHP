<?php
// Bases de datos Biblioteca - insertar_1.php

require_once "biblioteca.php";

$db = conectaDb();
cabecera("Añadir Asignatura 1", MENU_VOLVER);

$consulta = "SELECT COUNT(*) FROM $dbTabla2";
$result = $db->query($consulta);
if (!$result) {
    print "      <p>Error en la consulta.</p>\n";
} elseif ($result->fetchColumn() >= MAX_REG_TABLA) {
    print "      <p>Se ha alcanzado el número máximo de registros que se pueden guardar.</p>\n";
    print "      <p>Por favor, borre algún registro antes.</p>\n";
} else {
    print "      <form action=\"insertar_asignatura_2.php\" method=\"" . FORM_METHOD . "\">\n";
    print "        <p>Escriba los datos del nuevo registro:</p>\n";
    print "\n";
    print "        <table>\n";
    print "          <tbody>\n";
    print "            <tr>\n";
    print "              <td>Codigo:</td>\n";
    print "              <td><input type=\"text\" name=\"codigo\" size=\"$tamCodigo\" maxlength=\"$tamCodigo\" autofocus=\"autofocus\" /></td>\n";
    print "            </tr>\n";
    print "            <tr>\n";
    print "              <td>Asignatura:</td>\n";
    print "              <td><input type=\"text\" name=\"asignatura\" size=\"$tamAsignatura\" maxlength=\"$tamAsignatura\" /></td>\n";
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

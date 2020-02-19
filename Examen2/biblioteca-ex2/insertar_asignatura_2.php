<?php
// Bases de datos Biblioteca - insertar_2.php

require_once "biblioteca.php";

$db = conectaDb();
cabecera("Añadir Asignatura 2", MENU_VOLVER);

$codigo      = recoge("codigo");
$asignatura   = recoge("asignatura");

$codigoOk    = false;
$asignaturaOk = false;

if (mb_strlen($codigo, "UTF-8") > $tamCodigo) {
    print "      <p class=\"aviso\">El nombre no puede tener más de $tamCodigo caracteres.</p>\n";
    print "\n";
} else {
    $codigoOk = true;
}

if (mb_strlen($asignatura, "UTF-8") > $tamAsignatura) {
    print "      <p class=\"aviso\">Los apellidos no pueden tener más de $tamAsignatura caracteres.</p>\n";
    print "\n";
} else {
    $asignaturaOk = true;
}

if ($codigoOk && $asignaturaOk) {
    if ($codigo == "" && $asignatura == "") {
        print "      <p>Hay que rellenar al menos uno de los campos. No se ha guardado el registro.</p>\n";
    } else {
        $consulta = "SELECT COUNT(*) FROM $dbTabla2";
        $result = $db->query($consulta);
        if (!$result) {
            print "      <p>Error en la consulta.</p>\n";
        } elseif ($result->fetchColumn() >= MAX_REG_TABLA) {
            print "      <p>Se ha alcanzado el número máximo de registros que se pueden guardar.</p>\n";
            print "      <p>Por favor, borre algún registro antes.</p>\n";
        } else {
            $consulta = "SELECT COUNT(*) FROM $dbTabla2
                WHERE codigo=:codigo
                AND asignatura=:asignatura";
            $result = $db->prepare($consulta);
            $result->execute(array(":codigo" => $codigo, ":asignatura" => $asignatura));
            if (!$result) {
                print "      <p>Error en la consulta.</p>\n";
            } elseif ($result->fetchColumn() > 0) {
                print "      <p>El registro ya existe.</p>\n";
            } else {
                $consulta = "INSERT INTO $dbTabla2
                    (codigo, asignatura)
                    VALUES (:codigo, :asignatura)";
                $result = $db->prepare($consulta);
                if ($result->execute(array(":codigo" => $codigo, ":asignatura" => $asignatura))) {
                    print "      <p>Registro <strong>$codigo $asignatura</strong> creado correctamente.</p>\n";
                } else {
                    print "      <p>Error al crear el registro <strong>$codigo $asignatura</strong>.</p>\n";
                }
            }
        }
    }
}

$db = null;
pie();

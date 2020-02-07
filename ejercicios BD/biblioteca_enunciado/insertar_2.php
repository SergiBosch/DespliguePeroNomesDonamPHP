<?php
// Bases de datos Biblioteca - insertar_2.php

require_once "biblioteca.php";

$db = conectaDb();
cabecera("Añadir 2", MENU_VOLVER);

$nombre      = recoge("nombre");
$apellidos   = recoge("apellidos");
$email   = recoge("email");
$telefono   = recoge("telefono");

$nombreOk    = false;
$apellidosOk = false;
$emailOk = false;
$telefonoOK = false;

if (mb_strlen($nombre, "UTF-8") > $tamNombre) {
    print "      <p class=\"aviso\">El nombre no puede tener más de $tamNombre caracteres.</p>\n";
    print "\n";
} else {
    $nombreOk = true;
}

if (mb_strlen($apellidos, "UTF-8") > $tamApellidos) {
    print "      <p class=\"aviso\">Los apellidos no pueden tener más de $tamApellidos caracteres.</p>\n";
    print "\n";
} else {
    $apellidosOk = true;
}

if (mb_strlen($email, "UTF-8") > $tamApellidos) {
    print "      <p class=\"aviso\">El email no pueden tener más de $tamEmail caracteres.</p>\n";
    print "\n";
} else {
    $emailOk = true;
}

if (mb_strlen($telefono, "UTF-8") > $tamApellidos) {
    print "      <p class=\"aviso\">El telefono no pueden tener más de $tamTelefono caracteres.</p>\n";
    print "\n";
} else {
    $telefonoOK = true;
}

if ($nombreOk && $apellidosOk && $emailOk && $telefonoOK) {
    if ($nombre == "" && $apellidos == "" && $email == "" && $telefono == "") {
        print "      <p>Hay que rellenar al menos uno de los campos. No se ha guardado el registro.</p>\n";
    } else {
        $consulta = "SELECT COUNT(*) FROM $dbTabla";
        $result = $db->query($consulta);
        if (!$result) {
            print "      <p>Error en la consulta.</p>\n";
        } elseif ($result->fetchColumn() >= MAX_REG_TABLA) {
            print "      <p>Se ha alcanzado el número máximo de registros que se pueden guardar.</p>\n";
            print "      <p>Por favor, borre algún registro antes.</p>\n";
        } else {
            $consulta = "SELECT COUNT(*) FROM $dbTabla
                WHERE nombre=:nombre
                AND apellidos=:apellidos
                AND email=:email
                AND telefono=:telefono";
            $result = $db->prepare($consulta);
            $result->execute(array(":nombre" => $nombre, ":apellidos" => $apellidos, ":email" => $email, ":telefono" => $telefono));
            if (!$result) {
                print "      <p>Error en la consulta.</p>\n";
            } elseif ($result->fetchColumn() > 0) {
                print "      <p>El registro ya existe.</p>\n";
            } else {
                $consulta = "INSERT INTO $dbTabla
                    (nombre, apellidos, email, telefono)
                    VALUES (:nombre, :apellidos, :email, :telefono)";
                $result = $db->prepare($consulta);
                if ($result->execute(array(":nombre" => $nombre, ":apellidos" => $apellidos, ":email" => $email, ":telefono" => $telefono))) {
                    print "      <p>Registro <strong>$nombre $apellidos</strong> creado correctamente.</p>\n";
                } else {
                    print "      <p>Error al crear el registro <strong>$nombre $apellidos</strong>.</p>\n";
                }
            }
        }
    }
}

$db = null;
pie();

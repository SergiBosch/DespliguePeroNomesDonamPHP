<?php

// Variables globales

$dbDb    = MYSQL_DATABASE;                     // Nombre de la base de datos
$dbTabla = MYSQL_DATABASE . "." . MYSQL_TABLA; // Nombre de la tabla

// Consultas

$consultaCreaDb = "CREATE DATABASE $dbDb
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci";

$consultaCreaTabla = "CREATE TABLE $dbTabla (
    id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre VARCHAR($tamNombre),
    apellidos VARCHAR($tamApellidos),
    email VARCHAR($tamEmail),
    telefono VARCHAR($tamTelefono),
    PRIMARY KEY(id)
    )";

// Funciones comunes de bases de datos (MYSQL)

function conectaDb()
{
    try {
        $tmp = new PDO(MYSQL_HOST, MYSQL_USUARIO, MYSQL_PASSWORD);
        $tmp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $tmp->exec("set names utf8mb4");
        return($tmp);
    } catch(PDOException $e) {
        cabecera("Error grave", MENU_PRINCIPAL);
        print "      <p>Error: No puede conectarse con la base de datos.</p>\n";
        print "\n";
        print "      <p>Error: " . $e->getMessage() . "</p>\n";
        print "\n";
        pie();
        exit();
    }
}

function borraTodo($db)
{
    global $dbDb, $consultaCreaDb, $consultaCreaTabla;

    $consulta = "DROP DATABASE $dbDb";
    if ($db->query($consulta)) {
        print "      <p>Base de datos borrada correctamente.</p>\n";
        print "\n";
    } else {
        print "      <p>Error al borrar la base de datos.</p>\n";
        print "\n";
    }
    $consulta = $consultaCreaDb;
    if ($db->query($consulta)) {
        print "      <p>Base de datos creada correctamente.</p>\n";
        print "\n";
        $consulta = $consultaCreaTabla;
        if ($db->query($consulta)) {
            print "      <p>Tabla creada correctamente.</p>\n";
            print "\n";
        } else {
            print "      <p>Error al crear la tabla.</p>\n";
            print "\n";
        }
    } else {
        print "      <p>Error al crear la base de datos.</p>\n";
        print "\n";
    }
}

<?php
// Bases de datos Biblioteca - config.php

// Base de datos utilizada por el programa: MYSQL o SQLITE

$dbMotor = MySQL;     // Valores posibles: MYSQL o SQLITE

// Configuración para MYSQL

define("MYSQL_HOST",     "mysql:host=localhost");   // Nombre de host
define("MYSQL_USUARIO",  "root");                   // Nombre de usuario
define("MYSQL_PASSWORD", "bitnami");                       // Contraseña de usuario
define("MYSQL_DATABASE", "biblioteca"); // Nombre de la base de datos
define("MYSQL_TABLA",    "alumnos");                  // Nombre de la tabla
define("MYSQL_TABLA2",    "asignaturas");                  // Nombre de la tabla

// Configuración para SQLite

define("SQLITE_DATABASE", "D:\biblioteca.sqlite"); // Ubicación de la base de datos
define("SQLITE_TABLA",   "tabla");                                       // Nombre de la tabla

// Configuración Tabla Agenda

define("MAX_REG_TABLA",  20); // Número máximo de registros en la tabla
$tamNombre    = 40;           // Tamaño del campo Nombre
$tamApellidos = 60;           // Tamaño del campo Apellidos
$tamCodigo    = 5;           // Tamaño del campo Nombre
$tamAsignatura = 60;           // Tamaño del campo Apellidos


// Método de envío de formularios

define("FORM_METHOD",POST);     // Valores posibles: GET o POST

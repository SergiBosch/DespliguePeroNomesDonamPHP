<?php
// Bases de datos Biblioteca - borrartodo_2.php

require_once "biblioteca.php";


    $db = conectaDb();
    cabecera("Crear Alumnos", MENU_VOLVER);
    crearAlumnos($db);
    $db = null;
    pie();


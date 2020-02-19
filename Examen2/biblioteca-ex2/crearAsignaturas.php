<?php
// Bases de datos Biblioteca - borrartodo_2.php

require_once "biblioteca.php";


    $db = conectaDb();
    cabecera("Crear Asignatura", MENU_VOLVER);
    crearAsignatura($db);
    $db = null;
    pie();


<?php
// Bases de datos Biblioteca - borrartodo_2.php

require_once "biblioteca.php";


    $db = conectaDb();
    cabecera("Crear BD", MENU_VOLVER);
    crearBD($db);
    $db = null;
    pie();


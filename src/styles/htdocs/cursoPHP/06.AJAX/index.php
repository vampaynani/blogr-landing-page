<?php
/**
 * html.php
 * Mostraremos salidas de las vistas al usuario y las acciones que el usuario envie al controlador.
 */

/**
 * require()
 * Establece que el codigo del archivo es requerido, es decir obligatorio para el funcionamiento del programa.
 */

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();
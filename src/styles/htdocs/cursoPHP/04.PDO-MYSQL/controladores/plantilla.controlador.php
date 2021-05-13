<?php

Class ControladorPlantilla {
    /*Llamada a la Plantilla*/
    public function ctrTraerPlantilla() {
        /**
         * Se utiliza para invosar el archivo que contiene codigo html o php.
         */
        include "vistas/plantilla.php";
    }
};
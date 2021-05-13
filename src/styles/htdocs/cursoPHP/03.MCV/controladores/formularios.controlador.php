<?php

Class ControladorFormularios {
    /**
     * Registro
     */
    static public function ctrRegistro() {
        if(isset($_POST["registroNombre"])) {
            return "ok";
        }
    }
}
<?php

Class Conexion {
    static public function conectar() {
        /**
         * PDO("Nombre del servidor"; "Nombre de la base de datos"; "Usuario"; "Contraseña");
         */
        $link = new PDO("mysql:host=localhost;dbname=curso-php", "root", "");

        $link->exec("set names utf8");

        return $link;
    }
}
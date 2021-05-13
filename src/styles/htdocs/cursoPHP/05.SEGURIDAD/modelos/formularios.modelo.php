<?php

require_once "conexion.php";

class ModeloFormularios {

    /* REGISTRO */
    static public function mdlRegistro($tabla, $datos) {
        /**
         * prepare() Prepara una sentencia SQL para ser ejecutada por el metodo
         * PDOStatement::execute(). La sentencia SQL puede contener cero o mas marcadores de parametros
         * con nombre (:name) o signos de interrogacion (?) por ,os cuales los valores reales seran
         * sustituidos por la sentencia sea ejecutada. Ayuda a prevenir inyecciones SQL eliminando
         * la necesidad de entrecomillar manualmente los parametros.
         */
        /*Statement = declaracion*/
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(token, nombre, email, password) VALUES(:token, :nombre, :email, :password)");
        /**
         * bindParam() Vincula una variable de php a un parametro de susticion con nombre o de signo de
         * interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia.
         */
        $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if($stmt->execute()) {
            return "ok";
        }else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->close();
        $stmt = null;
    }

    /* SELECCIONAR REGSITROS */
    static public function mdlSeleccionarRegistros($tabla, $item, $valor) {

        if($item == null && $valor == null) {

            $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC ");
            $stmt->execute();

            return $stmt -> fetchAll();

        }else{

            $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item ORDER BY id DESC ");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt -> fetch();
        }

        $stmt->close();
        $stmt = null;
    }

    /* ACTUALIZAR REGISTRO */
    static public function mdlActualizarRegistro($tabla, $datos) {
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET token=:token, nombre=:nombre, email=:email, password=:password WHERE id=:id");
        
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);

        if($stmt->execute()) {
            return "ok";
        }else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->close();
        $stmt = null;
    }

    /* ELIMINAR REGISTRO */
    static public function mdlEliminarRegistro($tabla, $valor) {
        
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE token = :token");
        
        $stmt->bindParam(":token", $valor, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "ok";
        }else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->close();
        $stmt = null;
    }

    /* ACTUALIZAR INTENTOS FALLIDOS */
    static public function mdlActualizarIntentosFallidos($tabla, $valor, $token) {
        
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos_fallidos=:intentos_fallidos WHERE token=:token");
        
        $stmt->bindParam(":intentos_fallidos", $valor, PDO::PARAM_INT);
        $stmt->bindParam(":token", $token, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "ok";
        }else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->close();
        $stmt = null;
    }
}
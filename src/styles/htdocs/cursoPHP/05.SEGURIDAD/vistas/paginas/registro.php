<div class="d-flex justify-content-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="nombre" name="registroNombre">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" name="registroEmail">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="pwd" name="registroPassword">
            </div>
        </div>
        <?php
            /**
             * FORMA EN LA QUE SE INSTANCIA LA CLASE
             * DE UN METODO NO ESTATICO
             */
            // $registro = new ControladorFormularios();
            // $registro -> ctrRegistro();

            /**
             * FORMA EN LA QUE SE INSTANCIA LA CLASE
             * DE UN METODO ESTATICO
             */
            $registro = ControladorFormularios::ctrRegistro();
            
            if($registro == "ok") {
                echo '<script>
                    if( window.history.replaceState ) {
                        window.history.replaceState(null, null, window.location.href)
                    }
                </script>';
                echo '<div class="alert alert-success text-center">Registro Exitoso</div>';
            }

            if($registro == "error") {
                echo '<script>
                    if( window.history.replaceState ) {
                        window.history.replaceState(null, null, window.location.href)
                    }
                </script>';
                echo '<div class="alert alert-danger text-center">No se permiten caracteres especiales</div>';
            }


        ?>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
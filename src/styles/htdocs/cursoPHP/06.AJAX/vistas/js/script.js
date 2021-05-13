$("#email").change(function(){

    console.log(email);

    $(".alert").remove();

    var email = $(this).val();
    var datos = new FormData();
    datos.append("validarEmail", email);

    $.ajax({

        url: "ajax/formularios.ajax.php",
        method: 'POST',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {

            if(respuesta) {
                $("#email").val("");
                $("#email").parent().after(`
                    <div class="alert alert-warning">
                        <b>ERROR:</b>
                        El correo ya existe en la base de datos.
                    </div>
                `)
            }
        }
    });
});
  $(document).ready(function () {
        $('#tabla_indicadores').load('componentes/tabla_indicadores.php');
          
        $('#guardarnuevo_indicador').click(function () {
            new_indicador = $('#new_indicador').val();
            new_descripcion = $('#new_descripcion').val();
            new_select_tipo = $('#new_select_tipo').val();
            new_idmacro_asociado = $('#new_idmacro_asociado').val();
            new_idpro_asociado = $('#new_idpro_asociado').val();
            agregarindicador(new_indicador,new_descripcion,new_select_tipo,new_idmacro_asociado,new_idpro_asociado);
        });

        $('#actualizarindicador').click(function () {

            actualizaindicador();
        });
    });







function removeProceso(userId = null) {
    if (userId) {
        console.log(userId);
        // remove product button clicked
        $("#removeUserBtn").unbind('click').bind('click', function () {
            // loading remove button
            $("#removeUserBtn").button('loading');
            $.ajax({
                url: 'componentes/eliminar_proceso.php',
                type: 'post',
                data: {userId: userId},
                dataType: 'json',
                success: function (response) {
                    // loading remove button
                    $("#removeUserBtn").button('reset');
                    if (response.success == true) {
                        // remove product modal
                        $("#removeUserModal").modal('hide');

                        // update the product table
                        manageProductTable.ajax.reload(null, false);

                        // remove success messages
                        $(".remove-messages").html('<div class="alert alert-success">' +
                                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + response.messages +
                                '</div>');

                        // remove the mesages
                        $(".alert-success").delay(500).show(10, function () {
                            $(this).delay(3000).hide(10, function () {
                                $(this).remove();
                            });
                        }); // /.alert
                    } else {

                        // remove success messages
                        $(".removeUserMessages").html('<div class="alert alert-success">' +
                                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + response.messages +
                                '</div>');



                    } // /error
                } // /success function
            }); // /ajax fucntion to remove the product
            return false;
        }); // /remove product btn clicked
    } // /if productid
} // /remove product function



function agregarindicador(new_indicador, new_descripcion, new_select_tipo, new_idmacro_asociado, new_idpro_asociado) {

    cadena = "new_indicador=" + new_indicador +
            "&new_descripcion=" + new_descripcion +
            "&new_select_tipo=" + new_select_tipo +
            "&new_idmacro_asociado=" + new_idmacro_asociado +
            "&new_idpro_asociado=" + new_idpro_asociado;

    $.ajax({
        type: "get",
        url: "componentes/agregarindicadores.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla_indicadores').load('componentes/tabla_indicadores.php');
                alertify.success("agregado con exito");
            } else {
                alertify.error("Fallo el servidor");
            }
        }
    });
}


function preguntarSiNoCurso(id) {
    alertify.confirm('Está seguro de querer eliminar este indicador?',
            function () {
                eliminarDatos(id)
            }
    , function () {
        alertify.error('Se cancelo')
    });
}

function eliminarDatos(id) {

    cadena = "id=" + id;

    $.ajax({
        type: "POST",
        url: "componentes/eliminarDatos.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla_indicadores').load('componentes/tabla_indicadores.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}

function agregaform(datos) {

    d = datos.split('||');

    $('#idindicador_edt').val(d[0]);
    $('#indicador_edit').val(d[1]);
    $('#descripcion_edit').val(d[2]);
    $('#tipo_edit').val(d[3]);

}

function agregadatind(mp_asoc) {

    d = mp_asoc.split('|');

    if (d[2] === undefined) {
        document.getElementById("new_pro_asociado").style.display = "none";
        document.getElementById("new_lapro_asociado").style.display = "none";

        $('#new_idmacro_asociado').val(d[0]);
        $('#new_macro_asociado').val(d[1]);
        $('#new_idpro_asociado').val("");
        $('#new_pro_asociado').val("");
    } else {
        $('#new_idmacro_asociado').val(d[0]);
        $('#new_macro_asociado').val(d[1]);
        $('#new_idpro_asociado').val(d[2]);
        $('#new_pro_asociado').val(d[3]);
    }







}


function actualizaindicador() {


    idindicador_edt = $('#idindicador_edt').val();
    indicador_edit = $('#indicador_edit').val();
    descripcion_edit = $('#descripcion_edit').val();
    tipo_edit = $('#tipo_edit').val();

    cadena = "idindicador_edt=" + idindicador_edt +
            "&indicador_edit=" + indicador_edit +
            "&descripcion_edit=" + descripcion_edit +
            "&tipo_edit=" + tipo_edit;

    $.ajax({
        type: "POST",
        url: "componentes/actualizaindicadores.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
                $('#tabla_indicadores').load('componentes/tabla_indicadores.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}
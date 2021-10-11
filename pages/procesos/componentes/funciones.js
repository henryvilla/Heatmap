var manageProductTable;

//funcion para filtrar los select
function myPillFilter(col, id) {
    var data = document.getElementById(id).value;
    manageProductTable.columns(col).search(data).draw();

}


$(document).ready(function () {

    manageProductTable = $('#manageProductTable').DataTable({
        dom: 'Blrtip',
        'ajax': 'componentes/consultar_procesos.php',
        "buttons": [
            {extend: 'excel',
                exportOptions: {
                    columns: [1, 2, 3, 4, 5]
                },
                filename: 'Lista_Procesos'
            }
        ]

    });

 
//funcion para filtrar los input
    $('#proceso').on('keyup', function () {
        manageProductTable.column(1).search(this.value).draw();
    });
   
}); // document.ready fucntion


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





 
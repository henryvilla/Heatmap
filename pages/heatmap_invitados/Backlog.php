<!DOCTYPE html>
<?php
include ('../../includes/header_inv.php');
include ('../../conexionbd/connectDB.php');
?>


<section class="content-header">
    <h1> <big><u>Portal Heatmap</u> <span class="logo-mini"><IMG SRC="../../assests/images/icon.PNG" WIDTH=50 HEIGHT=50></span></big></h1>
    <ol class="breadcrumb">
        <button type="button" class="btn btn-danger" onclick="window.location.href = 'heatmap.php'">Heatmap</button>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Profile Image -->
            <div class="box box-success">
                <div class="box-body box-profile">

                    <section class="content">
                        <div class="row">

                            <div class="col-md-12">
                             
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Backlog priorizado de atención de procesos </div>
                                    </div>
                                    <div class="panel-body">

                                        <div class="remove-messages"></div>
                                        <div class="row">
                                            <div class="table-responsive" style="width: 100%;">
                                                <table class="demo cell-border dataTable" id="manageProductTable" cellspacing="2px;" style="width: 100%;">
                                                    <thead><tr>
                                                            <th class="text-center">Num</th>  
                                                            <th class="text-center">Proceso</th>
                                                            <th class="text-center">Owner</th>
                                                            <th class="text-center">Gerencia</th>
                                                            <th class="text-center">Vicepresidencia</th>
                                                            <th class="text-center">Puntaje</th>
                                                        </tr></thead>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- FIN DATA TABLE -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box image -->
        </div>
    </div>
</section>
<script>

    $(document).ready(function () {

        manageProductTable = $('#manageProductTable').DataTable({
            dom: 'Blrtip',
            'ajax': {
                'url': 'componentes/backlog_resultado.php',
                'data': {'id': ''},
                'type': 'post'
            },
            "buttons": [
                {extend: 'excel',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6]
                    },
                    filename: 'Evaluation'
                }
            ]

        });

    });


</script>
<?php
include ('../../includes/footer.php');
?>



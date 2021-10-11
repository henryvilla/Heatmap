<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
?>
<?php
$id_proceso = $_GET['id_proceso'];
$sql = "select * from procesos where id_proceso=$id_proceso";
$result = mysqli_query(DBi::$mysqli, $sql);
$ver = mysqli_fetch_row($result);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u><?php echo $ver[1]; ?></u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item">Heatmap</li>
            <li class="active">Proceso</li>
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
                                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Listado Usuarios</div><input id="id_proceso" value="<?php echo $id_proceso; ?>" type="hidden">
                                        </div>
                                        <div class="panel-body">
                                            <div class="remove-messages"></div>
                                            <div class="row">
                                                <div class="table-responsive" style="width: 100%;">
                                                    <table class="demo cell-border dataTable" id="manageProductTable" cellspacing="2px;" style="width: 100%;">
                                                        <thead><tr>
                                                                <th class="text-center">Indicador</th>
                                                                <th class="text-center">Tipo de Indicador</th>
                                                                <th class="text-center">Linea</th>
                                                                <th class="text-center">Resultado</th>
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
</div> <!-- content-wrapper  -->
<script>

    $(document).ready(function () {
        var data = document.getElementById('id_proceso').value;

        manageProductTable = $('#manageProductTable').DataTable({
            dom: 'Blrtip',
            'ajax': {
                'url': 'componentes/indicadores_resultado.php',
                'data': {'id': data},
                'type': 'post'
            },
            "buttons": [
                {extend: 'excel',
                    exportOptions: {
                        columns: [1, 2, 3, 4]
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



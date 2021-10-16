<!DOCTYPE html>
<?php
include ('../../includes/header_inv.php');
include ('../../conexionbd/connectDB.php');
?>
<?php
$id_proceso = $_GET['id_proceso'];
$sql = "select * from procesos where id_proceso=$id_proceso";
$result = mysqli_query(DBi::$mysqli, $sql);
$ver = mysqli_fetch_row($result);
?>


   <section class="content-header">
        <h1> <big><u>Portal Heatmap</u> <span class="logo-mini"><IMG SRC="../../assests/images/icon.PNG" WIDTH=50 HEIGHT=50></span></big></h1>
        <ol class="breadcrumb">
            <button type="button" class="btn btn-danger" onclick="window.location.href='heatmap.php'">Heatmap</button>
            <button type="button" class="btn btn-facebook" onclick="window.location.href='Backlog.php'">Backlog</button>
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
                                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Análisis del proceso: <b><?php echo $ver[1]; ?> </b></div><input id="id_proceso" value="<?php echo $id_proceso; ?>" type="hidden">
                                        </div>
                                        <div class="panel-body">

                                            <div class="remove-messages"></div>
                                            <div class="row">
                                                <div class="table-responsive" style="width: 100%;">
                                                    <table class="demo cell-border dataTable" id="manageProductTable" cellspacing="2px;" style="width: 100%;">
                                                        <thead><tr>
                                                                <th class="text-center">Indicador</th>  
                                                                <th class="text-center">Prioridad</th>
                                                                <th class="text-center">Peso</th>
                                                                <th class="text-center">Resultado Real</th>
                                                            </tr></thead>
                                                    </table>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <?php
                                    $sql = ""
                                            . "SELECT ROUND(SUM(resultado_i * peso_ind)/100), SUM(resultado_i * peso_ind)/100 FROM 
(SELECT e.id_proceso , if(e.resultado_i = 0, 'NC','C') AS valido, i.indicador ,e.resultado_i, i.peso_ind FROM 
indicadoresheatmap i JOIN evaluacion e ON e.id_indicador=i.id_indicador WHERE i.situacion = 1  order BY i.tipo ASC) AS map WHERE valido ='C' AND id_proceso=$id_proceso LIMIT 6
";
                                    $result = mysqli_query(DBi::$mysqli, $sql);
                                    $row = mysqli_fetch_row($result);

                                    if ($row[0] == 0) {
                                        $prioridad = '<span class="label label-default">Sin nivel</span>';
                                    }
                                    if ($row[0] == 1) {
                                        $prioridad = '<span class="label label-danger">Prioridad 1</span>';
                                    }
                                    if ($row[0] == 2) {
                                        $prioridad = '<span class="label label-warning">Prioridad 2</span>';
                                    }
                                    if ($row[0] == 3) {
                                        $prioridad = '<span class="label" style=" background-color: #F1EC33;">Prioridad 3</span>';
                                    }
                                    if ($row[0] == 4) {
                                        $prioridad = '<span class="label label-success">Prioridad 4</span>';
                                    }
                                    if ($row[0] == 5) {
                                        $prioridad = '<span class="label label-info">Prioridad 5</span>';
                                    }
                                    ?>
                                    <p> La prioridad de atención del proceso es: <?php echo $prioridad; ?> brindando un puntaje númerico de <b><?php echo round($row[1], 2); ?> </b> en rango del 1 al 5.</p>
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



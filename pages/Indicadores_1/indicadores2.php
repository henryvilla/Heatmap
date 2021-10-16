
<?php
session_start();
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
?>

<?php
require_once ('componentes/modal/userModal.php');
?>
<!DOCTYPE html>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Gestión de Indicadores</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="active">Heatmap</li>
            <li class="active">Indicadores</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="box-body box-profile">
                        <h4> Ingrese los parámetros correspondientes: </h4>
                        <?php
                        $_SESSION['indicadores_macroproceso_selected'] = $_GET['Macroproceso'];

                        $indicadores_macroproceso_selected = explode("|", $_SESSION['indicadores_macroproceso_selected']);
                        ?>
                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Gestión de Indicadores para el <b>proceso</b></div>
                                        </div>

                                        <div class="panel-body">
                                            <h5>Macroproceso:<b><?php echo $indicadores_macroproceso_selected[1] ?></b></h5>
                                            <p>Seleccione el Proceso al cual desea editar los indicadores:</p>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-12 table-responsive">
                                                        <table  style="width: 100%;text-align:center;" class="table  table-hover table-condensed table-bordered">

                                                            <tr style="background-color: #FFD34F">
                                                                <td><b>Procesos</b></td>
                                                                <td><b>Gerencia</b></td>
                                                                <td><b>Owner</b></td>
                                                                <td><b>Opción</b></td>
                                                            </tr>

                                                            <?php
                                                            $sql = "Select id_proceso,proceso, gerencia, ownerp from procesos where id_macroproceso='$indicadores_macroproceso_selected[0]';";
                                                           

                                                            $result = mysqli_query(DBi::$mysqli, $sql);
                                                            while ($ver = mysqli_fetch_row($result)) {
                                                                ?>

                                                                <tr>
                                                                    <td><?php echo $ver[1] ?></td>
                                                                    <td><?php echo $ver[2] ?></td>
                                                                    <td><?php echo $ver[3] ?></td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-primary" onclick="location.href = 'indicadorxmp.php?Macroproceso=<?php echo $indicadores_macroproceso_selected[0]."|".$indicadores_macroproceso_selected[1]; ?>&ind_procesos=<?php echo $ver[0]."|".$ver[1]; ?>'">Seleccionar</button>
                                                                    </td>

                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                        </table>
                                                    </div>
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
</div> <!-- content-wrapper -->
<script src="componentes/funciones.js"></script> 
<?php
include ('../../includes/footer.php');
?>




<?php
session_start();
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
?>
<!DOCTYPE html>
<?php
require_once ('componentes/modal/userModal.php');
?>

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

                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Gestión de Indicadores</div>
                                        </div>
                                         <form action="ind_desicion.php" method="post"> 
                                        <div class="panel-body">

                                            <p>Seleccione el Macroproceso:</p>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Macroproceso:</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control select2" id="Macroproceso" name="Macroproceso" style="width: 100%;" required>
                                                        <option value="" disabled="" selected="">Seleccione</option>
                                                        <?php
                                                        $sql = "SELECT id_mp,macroproceso FROM macroproceso";

                                                        $result = DBi::$mysqli->query($sql);
                                                        while ($row = $result->fetch_array()) {
                                                            echo "<option value='" . $row[0]."|".$row[1] . "'>" . $row[1] . "</option>";
                                                        } // while
                                                        ?>                                     
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="panel-body form-group">
                                            <input type="checkbox" id="ind_procesos" name="ind_procesos" value="por_procesos"> <label for="ind_procesos"> Seleccione si va a establecer indicadores por proceso</label>
                                        </div>
                                        <div class="panel-body form-group">
                                            <center>
                                                <input type="submit" value="Siguiente" class="btn btn-success">
                                            </center>
                                        </div>
                                         </form>

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



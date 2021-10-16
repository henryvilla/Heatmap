
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
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
                        <h4> Cree, modifique o elimine los indicadores para el Heatmap </h4>

                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Gestión de Indicadores <?php echo $comment;?></div>
                                        </div>
                                        <div class="panel-body">
                                            <h5> Los indicadores actuales se encuentran en la siguiente lista:</h5>

                                            <div class="form-group">
                                                <div id="tabla_indicadores"></div>
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



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

    <?php
    $_SESSION['indicadores_macroproceso_selected'] = $_GET['Macroproceso'];
    $_SESSION['indicadores_aplicaproceso_selected'] = $_GET['ind_procesos'];
    
      $indicadores_macroproceso_selected = explode("|", $_SESSION['indicadores_macroproceso_selected']);
    $indicadores_aplicaproceso_selected = explode("|", $_SESSION['indicadores_aplicaproceso_selected']);
    
if( $_SESSION['indicadores_aplicaproceso_selected'] === null){
   $comment = "para el <b>macroproceso</b>";
   $phrase = "Crea, edita o elimina indicadores para el macroproceso <b>".$indicadores_macroproceso_selected[1]."</b>";
}else{
   $comment = "para el <b>proceso</b> "; 
   $phrase = "Crea, edita o elimina indicadores para el proceso <b>".$indicadores_aplicaproceso_selected[1]."</b> del macroproceso <b>".$indicadores_macroproceso_selected[1]."</b>";
}
  
    ?>
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
                                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Gestión de Indicadores <?php echo $comment;?></div>
                                        </div>
                                        <div class="panel-body">
                                            <h5> <?php echo $phrase; ?></h5>

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
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla_indicadores').load('componentes/tabla_indicadores.php');
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
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
</script>

<?php
include ('../../includes/footer.php');
?>


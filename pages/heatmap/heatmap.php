<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
?>
<script src="../../pages/heatmap/js/funciones.js"></script> 

<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Heatmap</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="active">Heatmap</li>
        </ol>
    </section>



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Mapa de Calor de los procesos del Banco </div>
                        </div> <!-- /panel-heading -->

                        <div class="panel-body">
                            <div class="col-lg-3">
                                <p><font color="darkblue">Vicepresidencia: </font></p>
                                <select id="selectvp" onchange="cambioheatmap('selectvp')" class="form-control select2" style="width: 100%;">                      
                                    <option value=""selected  hidden>Todos</option>
                                    <?php
                                    $sql = "SELECT * FROM vps ORDER BY vp asc";
                                    $result = DBi::$mysqli->query($sql);
                                    while ($row = $result->fetch_array()) {
                                        echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                    }
                                    ?> 
                                </select>
                                <br><br>
                            </div>
                            <div id="tabla_heatmap"></div>
                        </div><!--panel-body-->

                    </div><!--panel-default-->
                </div>
                <!-- /.box image -->
            </div>
        </div>
    </section>


</div>
<script>

    $(document).ready(function () {
        $('#tabla_heatmap').load('componentes/tabla.php');
    });

function cambioheatmap(id) {
    var data = document.getElementById(id).value;
     $('#tabla_heatmap').load('componentes/tabla_pruebas.php?vp='+data);

}

</script>
<?php include ('../../includes/footer.php'); ?>


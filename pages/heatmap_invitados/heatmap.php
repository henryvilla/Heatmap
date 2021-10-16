<!DOCTYPE html>
<?php

include ('../../includes/header_inv.php');
include ('../../conexionbd/connectDB.php');
?>
<script src="../../pages/heatmap/js/funciones.js"></script> 

<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->

<!-- Content Wrapper. Contains page content -->



    <section class="content-header">
        <h1> <big><u>Portal Heatmap</u> <span class="logo-mini"><IMG SRC="../../assests/images/icon.PNG" WIDTH=50 HEIGHT=50></span></big></h1>
        <ol class="breadcrumb">
            <button type="button" class="btn btn-facebook" onclick="window.location.href='Backlog.php'">Backlog</button>
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
                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Heatmap de Procesos de Negocio </div>
                        </div> <!-- /panel-heading -->

                        <div class="panel-body">
                            <div class="col-lg-4 col-md-4">
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



<script>

    $(document).ready(function () {
        $('#tabla_heatmap').load('componentes/tabla.php');
    });

function cambioheatmap(id) {
    var data = document.getElementById(id).value;
     $('#tabla_heatmap').load('componentes/tabla_restart.php?vp='+data);

}

</script>
<?php include ('../../includes/footer.php'); ?>


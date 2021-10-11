<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
?>
<?php
require_once ('componentes/modal/userModal.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Gestión de procesos</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="active">Procesos</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="box-body box-profile">
                        
                        <!-- DATA TABLE-->
                        <div class="row">
                            
                            <div class="col-lg-3">
                                <p><font color="darkblue">Proceso:</font></p>
                                <input id="proceso" class="form-control" type="text" placeholder="Escriba aqui...">
                            </div>
                            <div class="col-lg-3">
                                <p><font color="darkblue">Macroproceso: </font></p>
                                <select id="selectmp" onchange="myPillFilter(2, 'selectmp')" class="form-control select2" style="width: 100%;">                      
                                    <option value="" selected  hidden>Todos</option>
                                    <?php
                                   $sql = "select macroproceso from macroproceso order by macroproceso asc";
                                    $result = DBi::$mysqli->query($sql);
                                    while ($row = $result->fetch_array()) {
                                        echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                                    }
                                    ?> 
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <p><font color="darkblue">Gerencia: </font></p>
                                <select id="selectger" onchange="myPillFilter(4, 'selectger')" class="form-control select2" style="width: 100%;">                      
                                    <option value="" selected  hidden>Todos</option>
                                    <?php
                                    $sql = "SELECT DISTINCT(gerencia) as ger FROM procesos ORDER BY ger asc";
                                    $result = DBi::$mysqli->query($sql);
                                    while ($row = $result->fetch_array()) {
                                        echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                                    }
                                    ?> 
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <p><font color="darkblue">Vicepresidencia: </font></p>
                                <select id="selectvp" onchange="myPillFilter(5, 'selectvp')" class="form-control select2" style="width: 100%;">                      
                                    <option value=""selected  hidden>Todos</option>
                                    <?php
                                   $sql = "SELECT DISTINCT(vp) FROM procesos ORDER BY vp asc";
                                    $result = DBi::$mysqli->query($sql);
                                    while ($row = $result->fetch_array()) {
                                        echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                                    }
                                    ?> 
                                </select>
                            </div>
                          
                        </div>

                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Listado Usuarios</div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="remove-messages"></div>
                                            <div class="row">
                                                <div class="table-responsive" style="width: 100%;">
                                                    <table class="demo cell-border dataTable" id="manageProductTable" cellspacing="2px;" style="width: 100%;">
                                                        <thead><tr>
                                                                <th class="text-center">Opciones</th>
                                                                <th class="text-center">Proceso</th>
                                                                <th class="text-center">Macroproceso</th>
                                                                <th class="text-center">Owner</th>
                                                                <th class="text-center">Gerencia</th>
                                                                <th class="text-center">Vicepresidencia</th>
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
</div> <!-- content-wrapper -->
<script src="componentes/funciones.js"></script> 
<?php
include ('../../includes/footer.php');
?>



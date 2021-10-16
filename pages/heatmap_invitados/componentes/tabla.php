
<?php
require_once "../../../conexionbd/connectDB.php";

$cadenasql = "SELECT pro.id_proceso , pro.proceso, 
(SELECT SUM(resultado_i * peso_ind)/100 FROM 
(SELECT e.id_proceso AS id_process, if(e.resultado_i = 0, 'NC','C') AS valido, i.indicador ,e.resultado_i, i.peso_ind FROM 
indicadoresheatmap i JOIN evaluacion e ON e.id_indicador=i.id_indicador WHERE i.situacion = 1  order BY i.tipo ASC) AS map WHERE valido ='C' AND id_process=pro.id_proceso LIMIT 6) AS valor  
FROM procesos pro WHERE pro.id_macroproceso =";

function validar_color($resultado) {
    $resultado_red = round($resultado);
    if ($resultado_red == 0) {
        $color = 'background-color:#d2d6de';
    }
    if ($resultado_red == 1) {
        $color = 'background-color:#dd4b39 !important';
    }
    if ($resultado_red == 2) {
        $color = 'background-color:#f39c12 !important';
    }
    if ($resultado_red == 3) {
        $color = 'background-color:#F1EC33 !important';
    }
    if ($resultado_red == 4) {
        $color = 'background-color:#00a65a !important';
    }
    if ($resultado_red == 5) {
        $color = 'background-color:#3c8dbc !important';
    }
    
    return $color;
}
?>

<style type="text/css">
    div.estrategico{border-radius: 5px; border: 2px groove; background-color:#FEFF8A; text-align:center;padding-top: 5px}
    tr {
        border: hidden;
    }
</style>
<div class="row">
    <div class="col-sm-12 table-responsive" style="width: 100%;text-align:center;word-wrap:break-word;background-color:#0C116E;">
        <h4 style="color: white">MacroProcesos Estratégicos</h4>

        <!-- TABLA PARA PROCESOS ESTRATEGICOS -->
        <table  style="width: 100%;text-align:center;" class="table   table-condensed">

            <tr>

                <td>
                    <div class="estrategico"> 
                        <h6>Gestión Estratégica</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPE01'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {

                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = " <?php echo $color; ?> ;  font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>


                <td>
                    <div class="estrategico"> 
                        <h6>Control Interno</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPE02'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

                <td>
                    <div class="estrategico"> 
                        <h6>Comunicación Corporativa</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPE03'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

                <td>
                    <div class="estrategico"> 
                        <h6>Desarrollo Institucional</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPE04'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

            </tr>


        </table>
    </div>

    <div class="col-sm-12 table-responsive"> <br></div>


    <div class="col-sm-12 table-responsive" style="width: 100%;text-align:center;word-wrap:break-word;background-color:#0C116E;">
        <h4 style="color: white">MacroProcesos Operativos</h4>

        <!-- TABLA PARA PROCESOS OPERATIVOS -->
        <table  style="border: hidden; width: 100%;text-align:center;" class="table   table-condensed" >
            <tr>

                <td>
                    <div class="estrategico"> 
                        <h6>Desarrollo de Productos y Servicios</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPO01'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>


                <td >
                    <div class="estrategico"> 
                        <h6>Captaciones</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPO02'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

                <td ROWSPAN=2>
                    <div class="estrategico">
                        <h6>Colocaciones</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPO03'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

                <td>
                    <div class="estrategico"> 
                        <h6>Servicios</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPO04'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    <div class="estrategico"> 
                        <h6>Inversiones</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPO05'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

                <td>
                    <div class="estrategico"> 
                        <h6> Gestión de Canales de Atención</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPO06'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

                <td>
                    <div class="estrategico"> 
                        <h6>Servicio de Atención al Cliente</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPO07'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

            </tr>

        </table>
    </div>

    <div class="col-sm-12 table-responsive"> <br></div>


    <div class="col-sm-12 table-responsive" style="width: 100%;text-align:center;word-wrap:break-word;background-color:#0C116E;">
        <h4 style="color: white">MacroProcesos de Soporte</h4>

        <!-- TABLA PARA PROCESOS DE SOPORTE -->
        <table  style="border: hidden; width: 100%;text-align:center;" class="table   table-condensed" >
            <tr>

                <td>
                    <div class="estrategico"> 
                        <h6>Gestión Documentaria</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPS01'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>


                <td>
                    <div class="estrategico"> 
                        <h6> Gestión de los Recursos Humanos</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPS02'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

                <td>
                    <div class="estrategico"> 
                        <h6> Gestión Logística</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPS03'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

                <td ROWSPAN=2>
                    <div class="estrategico"> 
                        <h6> Administración Financiera</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPS04'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    <div class="estrategico"> 
                        <h6>Soporte Legal</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPS05'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

                <td>
                    <div class="estrategico"> 
                        <h6> Gestión de Tecnologías de Información</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPS06'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

                <td>
                    <div class="estrategico"> 
                        <h6> Gestión de la Seguridad Integral</h6>
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = $cadenasql . "'MPS07'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>

                                        <?php
                                    }
                                    $color = validar_color($ver[2]);
                                    ?>

                                    <td>
                                        <div style = "<?php echo $color; ?> ; font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
                                    </td>

                                    <?php
                                    $cont = $cont + 1;
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </td>

            </tr>

        </table>
    </div>
</div>
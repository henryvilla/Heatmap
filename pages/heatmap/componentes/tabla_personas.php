
<?php
require_once "../../../conexionbd/connectDB.php";
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
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPE01' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {

                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                        <?php
                                    }
                                    if ($ver[2] == 0) {
                                        $color = 'background-color:#d2d6de';
                                    }
                                    if ($ver[2] == 1) {
                                        $color = 'background-color:#dd4b39 !important';
                                    }
                                    if ($ver[2] == 2) {
                                        $color = 'background-color:#f39c12 !important';
                                    }
                                    if ($ver[2] == 3) {
                                        $color = 'background-color:#00c0ef !important';
                                    }
                                    if ($ver[2] == 4) {
                                        $color = 'background-color:#00a65a !important';
                                    }
                                    if ($ver[2] == 5) {
                                        $color = 'background-color:#3c8dbc !important';
                                    }
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
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPE02' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPE03' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPE04' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="border: hidden; width: 100%;text-align:center;background-color:#FEFF8A;" class="table  table-condensed"">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPO01' and vp='Vicepresidencia de Banca Personas'";
                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPO02' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPO03' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPO04' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPO05' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPO06' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPO07' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPS01' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPS02' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPS03' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPS04' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPS05' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPS06' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
                        <table style="width: 100%;text-align:center;word-wrap:break-word;background-color:#FEFF8A;" class="table  table-condensed">
                            <tr>
                                <?php
                                $cont = 0;
                                $sql = "SELECT id_proceso AS id_process,proceso,(SELECT ROUND(AVG(e.estado)) FROM evaluacion e WHERE e.id_proceso = id_process) AS evaluation from procesos p where id_macroproceso='MPS07' and vp='Vicepresidencia de Banca Personas'";

                                $result = mysqli_query(DBi::$mysqli, $sql);
                                $cant = mysqli_num_rows($result);
                                while ($ver = mysqli_fetch_row($result)) {
                                    if ($cont % 4 == 0) {
                                        ?>
                                    </tr><tr>
                                    <?php } ?>

                                    <td>
                                        <div style = "font-size: 6px;border-style: groove; width:100%; height:25px; display: flex;align-items: center;justify-content: center;" onclick="location.href = 'proceso.php?id_proceso=<?php echo $ver[0]; ?>'"><?php echo $ver[1]; ?></div>
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
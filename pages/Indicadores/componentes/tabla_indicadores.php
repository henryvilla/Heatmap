
<?php
session_start();
require_once "../../../conexionbd/connectDB.php";

$indicadores_macroproceso_selected = explode("|", $_SESSION['indicadores_macroproceso_selected']);

if ($_SESSION['indicadores_aplicaproceso_selected'] === null) {
    $comple=$indicadores_macroproceso_selected[0] . '|' . $indicadores_macroproceso_selected[1];
    $sql = "SELECT id_indicador,indicador,descripcion,tipo from indicadores where id_macroproceso = '" . $indicadores_macroproceso_selected[0] . "' and id_proceso is null order by indicador";
} else {
    $indicadores_aplicaproceso_selected = explode("|", $_SESSION['indicadores_aplicaproceso_selected']);
    $comple=$indicadores_macroproceso_selected[0] . '|' . $indicadores_macroproceso_selected[1] . '|' . $indicadores_aplicaproceso_selected[0] . '|' . $indicadores_aplicaproceso_selected[1];
    $sql = "SELECT id_indicador,indicador,descripcion,tipo from indicadores where id_macroproceso = '" . $indicadores_macroproceso_selected[0] . "' and id_proceso = '" . $indicadores_aplicaproceso_selected[0] . "' order by indicador";
}
?>
<div class="row">
    <div class="col-sm-12 table-responsive">
        <table  style="width: 100%;text-align:center;" class="table  table-hover table-condensed table-bordered">
            <caption>
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo" onclick="agregadatind('<?php echo $comple; ?>')">
                    Agregar nuevo 
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </caption>
            <tr style="background-color: #FFD34F">
                <td><b>Indicador</b></td>
                <td><b>Descripci&oacute;n</b></td>
                <td><b>Tipo</b></td>
                <td><b>Editar</b></td>
                <td><b>Eliminar</b></td>
            </tr>

            <?php
            $result = mysqli_query(DBi::$mysqli, $sql);
            while ($ver = mysqli_fetch_row($result)) {

                $datos = $ver[0] . "||" .
                        $ver[1] . "||" .
                        $ver[2] . "||" .
                        $ver[3];
                ?>

                <tr>
                    <td><?php echo $ver[1] ?></td>
                    <td><?php echo $ver[2] ?></td>
                    <td><?php echo $ver[3] ?></td>
                    <td>
                        <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion_indicadores" onclick="agregaform('<?php echo $datos ?>')"></button>
                    </td>
                    <td>
                        <button class="btn btn-danger glyphicon glyphicon-trash" 
                                onclick="preguntarSiNoCurso('<?php echo $ver[0] ?>')">

                        </button>
                    </td>
                </tr>
    <?php
}
?>
        </table>
    </div>
</div>
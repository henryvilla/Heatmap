
<?php
session_start();
require_once "../../../conexionbd/connectDB.php";
?>
<div class="row">
    <div class="col-sm-12 table-responsive">
        <table  style="width: 100%;text-align:center;" class="table  table-hover table-condensed table-bordered">
            <caption>
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                    Agregar nuevo 
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </caption>
            <tr style="background-color: #FFD34F">
                <td><b>Variable</b></td>
                <td><b>Tipo</b></td>
                <td><b>Peso</b></td>
                <td colspan="3"><b>Opciones</b></td>
            </tr>

            <?php
            $sql = "SELECT id_indicador,indicador,tipo,peso_ind FROM indicadoresheatmap ORDER BY tipo, indicador";
            $result = mysqli_query(DBi::$mysqli, $sql);
            while ($ver = mysqli_fetch_row($result)) {

                if ($ver[2] == 'O') {
                    $estado = '<span class="label label-info">Objetivo</span>';
                } else {
                    $estado = '<span class="label label-warning">Subjetivo</span>';
                }
                
                $peso= round($ver[3],2)."%";

                $datos = $ver[0] . "||" .
                        $ver[1] . "||" .
                        $ver[2] . "||" .
                        $ver[3];
                ?>

                <tr>
                    <td><?php echo $ver[1] ?></td>
                    <td><?php echo $estado ?></td>
                    <td><?php echo $peso ?></td>
                    <td>
                        <button class="btn btn-light glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#modalEdicion_indicadores" onclick="agregaform('<?php echo $datos ?>')"></button>
                    </td>
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
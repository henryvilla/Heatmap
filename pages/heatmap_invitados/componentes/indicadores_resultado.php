<?php

require '../../../conexionbd/connectDB.php';
$id = $_POST['id'];
$sql = "SELECT indicador, resultado_i,peso_ind, (resultado_i * peso_ind)/100 FROM 
(SELECT e.id_proceso, if(e.resultado_i = 0, 'NC','C') AS valido, i.indicador , e.resultado_o,e.resultado_i, i.peso_ind FROM 
indicadoresheatmap i JOIN evaluacion e ON e.id_indicador=i.id_indicador WHERE i.situacion = 1  order BY i.tipo ASC) AS map WHERE valido ='C' AND id_proceso=$id LIMIT 6 ";
$result = DBi::$mysqli->query($sql);

$output = array('data' => array());

if ($result->num_rows > 0) {

    while ($row = $result->fetch_array()) {
        $resultado_red = round($row[1]);
        
        if ($resultado_red == 0) {
            $prioridad = '<span class="label label-default">Sin nivel</span>';
        }
        if ($resultado_red == 1) {
            $prioridad = '<span class="label label-danger">Prioridad 1</span>';
        }
        if ($resultado_red == 2) {
            $prioridad = '<span class="label label-warning">Prioridad 2</span>';
        }
        if ($resultado_red == 3) {
            $prioridad = '<span class="label" style=" background-color: #F1EC33;">Prioridad 3</span>';
        }
        if ($resultado_red == 4) {
            $prioridad = '<span class="label label-success">Prioridad 4</span>';
        }
        if ($resultado_red == 5) {
            $prioridad = '<span class="label label-info">Prioridad 5</span>';
        }


     
        $peso = $row[2] . "%"; 
        $resultado = round($row[3], 2);
        $output['data'][] = array(
            $row[0],
            $prioridad,
            $peso,
            "<b>" . $resultado . "</b>"
        );
    } // /while 
}// if num_rows

DBi::$mysqli->close();

echo json_encode($output);

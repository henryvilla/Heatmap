<?php

require '../../../conexionbd/connectDB.php';
$id = $_POST['id'];
$sql = "SELECT indicador,heatmap,linea, estado FROM evaluacion e JOIN indicadores i ON e.id_indicador=i.id_indicador WHERE e.id_proceso =$id;";

$result = DBi::$mysqli->query($sql);

$output = array('data' => array());

if ($result->num_rows > 0) {

    while ($row = $result->fetch_array()) {
      
        if ($row[3] == 0) {
            $estado = '<span class="label label-default">Sin nivel</span>';
        } 
        if ($row[3] == 1) {
            $estado = '<span class="label label-danger">Básico</span>';
        } 
        if ($row[3] == 2) {
            $estado = '<span class="label label-warning">En Desarrollo</span>';
        } 
        if ($row[3] == 3) {
            $estado = '<span class="label label-info">Satisfactorio</span>';
        } 
        if ($row[3] == 4) {
            $estado = '<span class="label label-success">Administrado</span>';
        } 
        if ($row[3] == 5) {
            $estado = '<span class="label label-primary">Optimizado</span>';
        } 

        $output['data'][] = array(
            
            $row[0],
            $row[1],		
            $row[2],
            $estado
        );
    } // /while 
}// if num_rows

DBi::$mysqli->close();

echo json_encode($output);


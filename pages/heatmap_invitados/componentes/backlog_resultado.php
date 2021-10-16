<?php

require '../../../conexionbd/connectDB.php';
$id = $_POST['id'];
$sql = "SELECT pro.id_proceso , pro.proceso, pro.ownerp, pro.gerencia, v.vp ,
(SELECT SUM(resultado_i * peso_ind)/100 FROM 
(SELECT e.id_proceso AS id_process, if(e.resultado_i = 0, 'NC','C') AS valido, i.indicador ,e.resultado_i, i.peso_ind FROM 
indicadoresheatmap i JOIN evaluacion e ON e.id_indicador=i.id_indicador WHERE i.situacion = 1  order BY i.tipo ASC) AS map WHERE valido ='C' AND id_process=pro.id_proceso LIMIT 6) AS valor  
FROM procesos pro join vps v ON v.id_vp = pro.vp  ORDER BY valor asc";
$result = DBi::$mysqli->query($sql);

$output = array('data' => array());
$num = 1;
if ($result->num_rows > 0) {

    while ($row = $result->fetch_array()) {

        $prioridad = '<center><span class="label label-info">  ' . $num . ' </span></center>';

        $output['data'][] = array(
            $prioridad,
            $row[1],
            $row[2],
            $row[3],
            $row[4],
            $row[5]
        );

        $num = $num + 1;
    } // /while 
}// if num_rows

DBi::$mysqli->close();

echo json_encode($output);

<?php

require '../../../conexionbd/connectDB.php';

$sql = "SELECT p.id_proceso, p.proceso , m.macroproceso, p.ownerp,p.gerencia,p.vp FROM procesos p JOIN macroproceso m ON p.id_macroproceso = m.id_mp";

$result = DBi::$mysqli->query($sql);

$output = array('data' => array());

if ($result->num_rows > 0) {

    while ($row = $result->fetch_array()) {
        $id_process = $row[0];


        $button = '
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Acción <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	  <!-- <li><a type="button" data-toggle="modal" id="editUserModalBtn" data-target="#editUserModal" onclick="editUser(' . $id_process . ')"> <i class="glyphicon glyphicon-edit"></i> Editar</a></li> -->
	  <li><a type="button" data-toggle="modal" data-target="#removeUserModal" id="inremoveUserModalBtn" onclick="removeProceso(' . $id_process . ')"> <i class="glyphicon glyphicon-trash"></i> Eliminar</a></li>           
          </ul></div>';


        $output['data'][] = array(
          
            $button,
            $row[1],		
            $row[2],
            $row[3],
            $row[4],
            $row[5]
        );
    } // /while 
}// if num_rows

DBi::$mysqli->close();

echo json_encode($output);


<?php 	

require '../../../conexionbd/connectDB.php';



$valid['success'] = array('success' => false, 'messages' => array());

$userId = $_POST['userId'];

if($userId) { 

 $sql = "DELETE FROM procesos WHERE id_proceso=$userId;";

 if(DBi::$mysqli->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "El proceso ha sido eliminado";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error, no se ha podido eliminar el proceso";
 }
 
 DBi::$mysqli->close();

 echo json_encode($valid);
 
} // /if $_POST
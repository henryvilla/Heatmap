<?php

require_once "../../../conexionbd/connectDB.php";

$a = $_GET['new_indicador'];
$b = $_GET['new_descripcion'];
$c = $_GET['new_select_tipo'];
$d = $_GET['new_idmacro_asociado'];
$e = $_GET['new_idpro_asociado'];

if($e == "") {
    $sql = "INSERT into indicadores (indicador,descripcion,tipo,id_macroproceso) values ('$a','$b','$c','$d');";
}else {
    $sql = "INSERT into indicadores (indicador,descripcion,tipo,id_macroproceso,id_proceso) values ('$a','$b','$c','$d','$e');";
}



echo $result = mysqli_query(DBi::$mysqli, $sql);
?>

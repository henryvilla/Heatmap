<?php

require_once "../../../conexionbd/connectDB.php";

$idindicador_edt = $_POST['idindicador_edt'];
$indicador_edit = $_POST['indicador_edit'];
$descripcion_edit = $_POST['descripcion_edit'];
$tipo_edit = $_POST['tipo_edit'];


$sql = "UPDATE indicadores set indicador='$indicador_edit', descripcion='$descripcion_edit',tipo='$tipo_edit' where id_indicador='$idindicador_edt'";

echo $result = mysqli_query(DBi::$mysqli, $sql);
?>
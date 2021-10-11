
<?php 
	require_once "../../../conexionbd/connectDB.php";
	
	$id=$_POST['id'];

	$sql="DELETE from indicadores where id_indicador='$id'";
	echo $result=mysqli_query(DBi::$mysqli,$sql);
 ?>
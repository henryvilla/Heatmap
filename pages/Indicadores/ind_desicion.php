<?php
error_reporting(0);
//$_SESSION['indicadores_macroproceso_selected'] = $_POST['Macroproceso'];
//$_SESSION['indicadores_aplicaproceso_selected'] = $_POST['ind_procesos'];

$indicadores_macroproceso_selected = $_POST['Macroproceso'];
$indicadores_aplicaproceso_selected = $_POST['ind_procesos'];

if( $indicadores_aplicaproceso_selected === null){
   echo "<script> location.href = 'indicadorxmp.php?Macroproceso=$indicadores_macroproceso_selected'</script>";
}else{
   echo "<script> location.href = 'indicadores2.php?Macroproceso=$indicadores_macroproceso_selected'</script>"; 
}


   

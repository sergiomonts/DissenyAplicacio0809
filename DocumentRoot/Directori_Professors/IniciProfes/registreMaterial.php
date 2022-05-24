<?php
session_start();

include_once('dbconn.php');
//Recive todos los datos del formulario.
//$id =$_POST['id'];

$idTipus = $_POST['idTipus'];
$etiquetaDepInf = $_POST['etiquetaDepInf'];
$numSerie = $_POST['numSerie'];
$macEthernet = $_POST['macEthernet'];
$macWifi = $_POST['macWifi'];
$SACE = $_POST['SACE'];
$dataAdquisicio = $_POST['dataAdquisicio'];
$idUbicacio = $_POST['idUbicacio'];


 
$conectar = conn();
$sql = "INSERT INTO `Material` (`idTipus`, `etiquetaDepInf`, `numSerie`, `macEthernet`, `macWifi`,`SACE`,`dataAdquisicio`,`idUbicacio`)
 VALUES ('$idTipus', '$etiquetaDepInf', '$numSerie', '$macEthernet', '$macWifi','$SACE','$dataAdquisicio','$idUbicacio')";
 
 //$result = mysqli_query($conectar , $sql)or trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
 
 if ($result =mysqli_query($conectar , $sql)){
    header('Location:gestio.php');
 }else{
  trigger_error("Error".mysqli_error($conectar), E_USER_ERROR);
}
?>
 





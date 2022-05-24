<?php
session_start();

include_once('dbconn.php');
//Recive todos los datos del formulario.
//$id =$_POST['id'];
$id = $_POST['id'];
$informacio = $_POST['informacio'];
$idAlumne = $_POST['idAlumne'];
$idDispositiu = $_POST['idDispositiu'];
$idEstat = $_POST['idEstat'];
$dataOberta = $_POST['dataOberta'];
$dataTancada = $_POST['dataTancada'];


 
$conectar = conn();

//$id = $_GET['id'];

$sql="UPDATE `Incidencies` SET `informacio` = '$informacio'
, `dataOberta` = '$dataOberta'
, `dataTancada` = '$dataTancada'
, `idAlumne` = '$idAlumne'
, `idDispositiu` = '$idDispositiu'
, `idEstat` = '$idEstat' 
WHERE `Incidencies`.`id` = '$id'";

/*$sql = "INSERT INTO `Incidencies` (`informacio`, `dataOberta`,`dataTancada`, `idAlumne`, `idDispositiu`, `idEstat`)
 VALUES ('$informacio', '$dataOberta', '$dataTancada' '$idAlumne', '$idDispositiu', '$idEstat')";*/
 
 //$result = mysqli_query($conectar , $sql)or trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
 
 if ($result =mysqli_query($conectar , $sql)){
    header('Location:incidencies.php');
 }else{
  trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
}  
?>
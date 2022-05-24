<?php
session_start();

include_once('dbconn.php');
//Recive todos los datos del formulario.
//$id =$_POST['id'];

$informacio = $_POST['informacio'];
$idAlumne = $_POST['idAlumne'];
$idDispositiu = $_POST['idDispositiu'];
$idEstat = $_POST['idEstat'];
$dataOberta = $_POST['dataOberta'];


 
$conectar = conn();
$sql = "INSERT INTO `Incidencies` (`informacio`, `dataOberta`, `idAlumne`, `idDispositiu`, `idEstat`)
 VALUES ('$informacio', '$dataOberta', '$idAlumne', '$idDispositiu', '$idEstat')";
 
 //$result = mysqli_query($conectar , $sql)or trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
 
 if ($result =mysqli_query($conectar , $sql)){
    header('Location:gestio.php');
 }else{
  trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
}
 
 
?>
 
 




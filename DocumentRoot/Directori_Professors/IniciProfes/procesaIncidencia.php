<?php
//Inicia la sessió
session_start();
//Rep totes les dades del formulari
include_once('dbconn.php');
$id = $_POST['id'];
$informacio = $_POST['informacio'];
$idAlumne = $_POST['idAlumne'];
$idDispositiu = $_POST['idDispositiu'];
$idEstat = $_POST['idEstat'];
$dataOberta = $_POST['dataOberta'];
$dataTancada = $_POST['dataTancada'];


//Conecta amb la base de dades
$conectar = conn();

//Emmagatzema en variable la consulta a la BD
$sql="UPDATE `Incidencies` SET `informacio` = '$informacio'
, `dataOberta` = '$dataOberta'
, `dataTancada` = '$dataTancada'
, `idAlumne` = '$idAlumne'
, `idDispositiu` = '$idDispositiu'
, `idEstat` = '$idEstat' 
WHERE `Incidencies`.`id` = '$id'";

//Executa la consulta en aquest cas un update. 
 if ($result =mysqli_query($conectar , $sql)){
    header('Location:incidencies.php');
 }else{
  trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
}  
?>
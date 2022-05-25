<?php
//Inicia la sessio
session_start();

//Inclou fitxer php
include_once('dbconn.php');

//Rep totes les dades del formulari
$informacio = $_POST['informacio'];
$idAlumne = $_POST['idAlumne'];
$idDispositiu = $_POST['idDispositiu'];
$idEstat = $_POST['idEstat'];
$dataOberta = $_POST['dataOberta'];

//Conecta amb la bd
$conectar = conn();

//Emmagatzema en variable la consulta a la BD
$sql = "INSERT INTO `Incidencies` (`informacio`, `dataOberta`, `idAlumne`, `idDispositiu`, `idEstat`)
 VALUES ('$informacio', '$dataOberta', '$idAlumne', '$idDispositiu', '$idEstat')";
 
//Executa la consulta en aquest cas un update 
 if ($result =mysqli_query($conectar , $sql)){
    header('Location:gestio.php');
 }else{
  trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
}
?>
 
 




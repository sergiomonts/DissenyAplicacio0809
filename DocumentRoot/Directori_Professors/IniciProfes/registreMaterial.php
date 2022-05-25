<?php
//Inicia la sessio
session_start();
//Inclou fitxer php
include_once('dbconn.php');

//Rep i emmagatzema les dades del forumulari
$idTipus = $_POST['idTipus'];
$etiquetaDepInf = $_POST['etiquetaDepInf'];
$numSerie = $_POST['numSerie'];
$macEthernet = $_POST['macEthernet'];
$macWifi = $_POST['macWifi'];
$SACE = $_POST['SACE'];
$dataAdquisicio = $_POST['dataAdquisicio'];
$idUbicacio = $_POST['idUbicacio'];

//Conecta amb la bd
$conectar = conn();

//Emmagatzema en variable la consulta a la BD
$sql = "INSERT INTO `Material` (`idTipus`, `etiquetaDepInf`, `numSerie`, `macEthernet`, `macWifi`,`SACE`,`dataAdquisicio`,`idUbicacio`)
 VALUES ('$idTipus', '$etiquetaDepInf', '$numSerie', '$macEthernet', '$macWifi','$SACE','$dataAdquisicio','$idUbicacio')";
 
//Executa la consulta en aquest cas un update 
 if ($result =mysqli_query($conectar , $sql)){
    header('Location:gestio.php');
 }else{
  trigger_error("Error".mysqli_error($conectar), E_USER_ERROR);
}
?>
 





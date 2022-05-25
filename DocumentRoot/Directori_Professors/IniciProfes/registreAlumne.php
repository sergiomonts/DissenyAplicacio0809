<?php
//Inicia la sessio
session_start();
//Inclou fitxers php
include_once('dbconn.php');

//Emmagatzema les dades rebudes per formular
$nom = $_POST['nom'];
$cognom1 = $_POST['cognom1'];
$cognom2 = $_POST['cognom2'];
$grupClase = $_POST['grupClase'];
$tipusUsuari = $_POST['tipusUsuari'];
$email = $_POST['email'];

//Encripta la contrasenya del usuari creat
$contrasenya = password_hash($_POST['contrasenya'], PASSWORD_BCRYPT);

//Conecta amb la bd 
$conectar = conn();

//Emmagatzema en variable la consulta a la BD
$sql = "INSERT INTO `Usuaris` (`nom`, `cognom1`, `cognom2`, `correu`, `grupClasse`, `tipusUsuari`, `contrasenya`)
 VALUES ('$nom', '$cognom1', '$cognom2', '$email', '$grupClase', '$tipusUsuari', '$contrasenya')";
 

//Executa la consulta en aquest cas un update. 
 if ($result =mysqli_query($conectar , $sql)){
    header('Location:gestio.php');
 }else{
  trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
} 
?>
 
 



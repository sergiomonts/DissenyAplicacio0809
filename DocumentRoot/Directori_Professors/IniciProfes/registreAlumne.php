<?php
session_start();

include_once('dbconn.php');
//Recive todos los datos del formulario.
//$id =$_POST['id'];

$nom = $_POST['nom'];
$cognom1 = $_POST['cognom1'];
$cognom2 = $_POST['cognom2'];
$grupClase = $_POST['grupClase'];
$tipusUsuari = $_POST['tipusUsuari'];
$email = $_POST['email'];
$contrasenya = password_hash($_POST['contrasenya'], PASSWORD_BCRYPT);
 
$conectar = conn();
$sql = "INSERT INTO `Usuaris` (`nom`, `cognom1`, `cognom2`, `correu`, `grupClasse`, `tipusUsuari`, `contrasenya`)
 VALUES ('$nom', '$cognom1', '$cognom2', '$email', '$grupClase', '$tipusUsuari', '$contrasenya')";
 
 //$result = mysqli_query($conectar , $sql)or trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
 
 if ($result =mysqli_query($conectar , $sql)){
    header('Location:gestio.php');
 }else{
  trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
}
 
 
?>
 
 



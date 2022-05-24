<?php
session_start();

if(!$_SESSION['usuarioAl']){
    header('Location:../..\Iniciar_Sessio\index.php');
}
?>

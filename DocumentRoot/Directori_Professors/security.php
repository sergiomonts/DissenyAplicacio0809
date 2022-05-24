<?php
session_start();

if(!$_SESSION['usuarioProf']){
    header('Location:../..\Iniciar_Sessio\index.php');
}
?>

<?php
//Inicia la sessio
session_start();
//Si la sesio no es usuarioAl no permet entrar a la pagina
//i reenvia cap a index.php que correspon a la web 
//d'inici de sessió
if(!$_SESSION['usuarioAl']){
    header('Location:../..\Iniciar_Sessio\index.php');
}
?>

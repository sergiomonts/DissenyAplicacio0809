<?php
//Inicia la sessio
session_start();
//Si la sessio no es igual a usuarioProf redirigeix a la landing page d'iniciar sessio.
if(!$_SESSION['usuarioProf']){
    header('Location:../..\Iniciar_Sessio\index.php');
}
?>

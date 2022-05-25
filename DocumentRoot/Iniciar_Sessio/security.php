<?php
//Inicia Sessio
session_start();
//Mentre que la sessio sigue usuarioAL o usuarioProf permetra entrar a la web
//si no, redirigeix a la landing page d'iniciar sessio.
if($_SESSION['usuarioAl']){

}elseif($_SESSION['usuarioProf']){
    
}else{
    header('Location:index.php');
}
?>
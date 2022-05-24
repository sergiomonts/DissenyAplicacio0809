<?php
session_start();

if($_SESSION['usuarioAl']){

}elseif($_SESSION['usuarioProf']){
    
}else{
    header('Location:index.php');
}
?>
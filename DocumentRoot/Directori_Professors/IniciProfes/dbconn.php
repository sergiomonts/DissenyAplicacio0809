<?php
//Funció que conecta la base de dades
function conn(){ 
    $db_host="mariadb";
    //$port='3306';
    $db="institut";
    $user="root";
    $pass="";

    $conn = mysqli_connect("localhost", $user, $pass, $db);
    return $conn; 
}
?>

<?php
function conn(){ 
    $db_host="mariadb";
    //$port='3306';
    $db="Institut";
    $user="root";
    $pass="rootpwd";

    $conn = mysqli_connect("mariadb", $user, $pass, $db);
    return $conn; 
}

?>

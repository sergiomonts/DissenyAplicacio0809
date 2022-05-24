<?php
include_once('login.php');


session_start(); //to ensure you are using same session

    if(isset($_POST['logout_btn'])){
        
        $conectar = conn();


        $navegador = obteDades();
        //echo "$navegador";

        $ip = $_SERVER['REMOTE_ADDR'];
        //echo "$ip";
        
        //$hora = obtenirHora();
        date_default_timezone_set("Europe/Madrid");
        $dataActual = date("H:i:s");
        //echo "$hora";
        $accio = "LogOut";
        echo "$accio";
        
        $id = $_SESSION['usuarioId'];
        echo "$id";

        $insertLog = "INSERT INTO `logs` (`horaAcces`, `accio`, `ipRemota`, `navegador`, `idUser`) 
        VALUES ('$dataActual', '$accio', '$ip', '$navegador', '$id')";

            if ($insert = mysqli_query($conectar , $insertLog)){
                session_destroy();
                unset($_SESSION['usuarioProf']);
                unset($_SESSION['usuarioAl']);

                header('Location:index.php');
        
                
            }else{
            trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
            }

        
                                

    }


    




?> 

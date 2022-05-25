<?php
//Inclou login.php
include_once('login.php');
session_start();
    //Comprova que no es NULL l'informació enviada per POST
    if(isset($_POST['logout_btn'])){
        //Conexio amb base de dades
        $conectar = conn();

        //Guarda en variable el resultat de la funcio obteDades ubicada en logs (Obte el Navegador)
        $navegador = obteDades();

        //Guarda en variable el resultat de la funcio obtenirIp ubicada en logs (Obte ip remota)
        $ip = obtenirIp();

        //Guarda en variable el resultat de la funcio obtenirHora ubicada en logs (Obte hora actual)
        $dataActual = obtenirHora();

        //Crea variable amb l'acció per introduir en la base de dades.
        $accio = "LogOut";

        //Emamagatzema la variable de una sessio creada abans
        $id = $_SESSION['usuarioId'];
 
        //Guardem l'insert en una variable, inserta les variables declarades previament
        $insertLog = "INSERT INTO `logs` (`horaAcces`, `accio`, `ipRemota`, `navegador`, `idUser`) 
        VALUES ('$dataActual', '$accio', '$ip', '$navegador', '$id')";

            //Si la consulta en la base de dades funciona, borra i destrueix la sessio.
            if ($insert = mysqli_query($conectar , $insertLog)){
                session_destroy();
                unset($_SESSION['usuarioProf']);
                unset($_SESSION['usuarioAl']);

                header('Location:index.php');
        
            //Si no conecta be, mostra un error    
            }else{
            trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
            }

        
                                

    }


    




?> 

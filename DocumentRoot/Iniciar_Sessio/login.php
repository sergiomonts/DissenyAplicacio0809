<?php 
ob_start(); 
session_start();
include('logs.php');

?>

<?php
include 'dbconn.php';

if(isset($_POST["mail_entra"])  && isset($_POST["pass_entra"])) {
    //comprova si les  dades estan en la BD
    $mailEntra = $_POST["mail_entra"];
    $passEntra = $_POST["pass_entra"];
    
    $conectar = conn();

    $sql = "SELECT Usuaris.correu, Usuaris.contrasenya, Usuaris.tipusUsuari, Usuaris.id FROM Usuaris WHERE Usuaris.correu = '$mailEntra'";
    
        if ($result = $conectar->query($sql)){
            if ($result->num_rows > 0){
                
                while ($obj = $result->fetch_object()){
                    $usuari = $obj->correu;
                    $contra = $obj->contrasenya;
                    $tipusUsuari = $obj->tipusUsuari;
                    $id = $obj->id;
                }
                //$obj=$result->fetch_assoc();
                //$contra=$obj["contrasenya"];
                $conectar -> close();
            }
            if($mailEntra == $usuari){
                            
                if(password_verify($passEntra, $contra)){
                    if ($tipusUsuari=="ALUMNE"){
                        $conectar = conn();

                        $navegador = obteDades();
                        //echo "$navegador";

                        $ip = $_SERVER['REMOTE_ADDR'];
                        //echo "$ip";
                        
                        //$hora = obtenirHora();
                        date_default_timezone_set("Europe/Madrid");
                        $dataActual = date("H:i:s");
                        //echo "$hora";
                        $accio = "LogIn";
                        echo "$accio";
                 

                        $insertLog = "INSERT INTO `logs` (`horaAcces`, `accio`, `ipRemota`, `navegador`, `idUser`) 
                        VALUES ('$dataActual', '$accio', '$ip', '$navegador', '$id')";
                        if ($insert = mysqli_query($conectar , $insertLog)){
                        //pagina inici alumnes
                        header('Location:/Directori_Alumnes/IniciAlumnes/index.php');
                        $_SESSION['usuarioAl'] = $mailEntra;
                        $_SESSION['usuarioId'] = $id;
                        }else{
                            trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
                            }  
                       
                    } else{
                        $conectar = conn();

                        $navegador = obteDades();
                        //echo "$navegador";

                        $ip = $_SERVER['REMOTE_ADDR'];
                        //echo "$ip";
                        
                        //$hora = obtenirHora();
                        date_default_timezone_set("Europe/Madrid");
                        $dataActual = date("H:i:s");
                        //echo "$hora";
                        $accio = "LogIn";
                        echo "$accio";

                        $insertLog = "INSERT INTO `logs` (`horaAcces`, `accio`, `ipRemota`, `navegador`, `idUser`) 
                        VALUES ('$dataActual', '$accio', '$ip', '$navegador', '$id')";

                            if ($insert = mysqli_query($conectar , $insertLog)){
                                //pagina inici profes
                                header('Location:/Directori_Professors/IniciProfes/index.php');
                                $_SESSION['usuarioProf'] = $mailEntra;
                                $_SESSION['usuarioId'] = $id;
                            }else{
                            trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
                            }                        
                    }
                }
        }else{
            //retorna a la pagina inici
            header('Location:/Iniciar_Sessio/index.php');

        }
    }
}     

//ob_end_flush();
?>
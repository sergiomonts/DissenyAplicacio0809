<?php 
//Inician la sessio
ob_start(); 
session_start();
//Inclou arxiu logs.php
include('logs.php');
include('dbconn.php');
?>

<?php

//Comprova que les variables estan completes i no son null
if(isset($_POST["mail_entra"])  && isset($_POST["pass_entra"])){
    //Guarda en variables l'informació pasada per post desde el formulari de index.php
    $mailEntra = $_POST["mail_entra"];
    $passEntra = $_POST["pass_entra"];
    //Guarda el resultat de la funcio conn en una variable, conn() esta creada en dbconn.php
    //i fa la connexio amb la base de dades.
    $conectar = conn();

    //Guarda la consulta a la base de dades en una variable
    $sql = "SELECT Usuaris.correu, Usuaris.contrasenya, Usuaris.tipusUsuari, Usuaris.id FROM Usuaris WHERE Usuaris.correu = '$mailEntra'";
        
    //Fa la consulta i la guarda en una variable
if ($result = $conectar->query($sql)){
            
            //Comprova si el resultat de la consulta retorna mes de 0 files
            if ($result->num_rows > 0){
               
                //Bucle que converteix result en un array d'objectes
                //i guarda les files en obj, despres es guarda en 
                //variables les dades de cada columna
                while ($obj = $result->fetch_object()){
                    $usuari = $obj->correu;
                    $contra = $obj->contrasenya;
                    $tipusUsuari = $obj->tipusUsuari;
                    $id = $obj->id;
                }
                
                //Tanca la connexio amb la base de dades
                $conectar -> close();
            }
            
            //Compara el mail introduit per formulari amb el mail extret de la BD
            if($mailEntra == $usuari){
                
                //Compara la contrasenya introduïda per formulari amb l'extreta de la BD
                //i verifica si son iguals amb passqord_verify perque estan encriptades           
                if(password_verify($passEntra, $contra)){
                    
                    //Si el tipusUsuari es ALUMNE redirigeix cap a la web de alumnes
                    if ($tipusUsuari=="ALUMNE"){
                        //Conexio amb base de dades
                        $conectar = conn();

                        //Guarda en variable el resultat de la funcio obteDades ubicada en logs (Obte el Navegador)
                        $navegador = obteDades();

                        //Guarda en variable el resultat de la funcio obtenirIp ubicada en logs (Obte ip remota)
                        $ip = obtenirIp();

                        //Guarda en variable el resultat de la funcio obtenirHora ubicada en logs (Obte hora actual)
                        $dataActual = obtenirHora();

                        //Crea variable amb l'acció per introduir en la base de dades.
                        $accio = "LogIn";
                 
                        //Guardem l'insert en una variable, inserta les variables declarades previament
                        $insertLog = "INSERT INTO `logs` (`horaAcces`, `accio`, `ipRemota`, `navegador`, `idUser`) 
                        VALUES ('$dataActual', '$accio', '$ip', '$navegador', '$id')";

                        //Executa l'insert y l'emmagatzema en una variable
                        if ($insert = mysqli_query($conectar , $insertLog)){
                        
                        //Redirecció cap a la pagina inici alumnes
                        header('Location:..\Directori_Alumnes/IniciAlumnes/index.php');

                        //Crea sessions i les assigna una variable
                        $_SESSION['usuarioAl'] = $mailEntra;
                        $_SESSION['usuarioId'] = $id;

                        //Si la l'acció sobre la base de dades no funciona mostra un error
                        }else{
                            trigger_error("Error".mysqli_error($conectar), E_USER_ERROR);
                            }  
    
                        //Si el tipusUsuari es PROFFESSOR redirigeix cap a la web de profes
                         } else{
                        //Conexio amb base de dades
                        $conectar = conn();

                        //Guarda en variable el resultat de la funcio obteDades ubicada en logs (Obte el Navegador)
                        $navegador = obteDades();

                        //Guarda en variable el resultat de la funcio obtenirIp ubicada en logs (Obte ip remota)
                        $ip = obtenirIp();

                        //Guarda en variable el resultat de la funcio obtenirHora ubicada en logs (Obte hora actual)
                        $dataActual = obtenirHora();

                        //Crea variable amb l'acció per introduir en la base de dades.
                        $accio = "LogIn";
                 
                        //Guardem l'insert en una variable, inserta les variables declarades previament
                        $insertLog = "INSERT INTO `logs` (`horaAcces`, `accio`, `ipRemota`, `navegador`, `idUser`) 
                        VALUES ('$dataActual', '$accio', '$ip', '$navegador', '$id')";

                            //Executa l'insert y l'emmagatzema en una variable
                            if ($insert = mysqli_query($conectar , $insertLog)){

                                //Redirecció cap a la pagina inici profes
                                header('Location:../Directori_Professors\IniciProfes\index.php');
                            
                                //Crea sessions i les assigna una variable
                                $_SESSION['usuarioProf'] = $mailEntra;
                                $_SESSION['usuarioId'] = $id;

                            //Si la l'acció sobre la base de dades no funciona mostra un error     
                            }else{
                            trigger_error("Error".mysqli_error( $conectar), E_USER_ERROR);
                            }                        
                    }
                }else{
                    //Torna a la pagina d'inici
                    header('Location:/Iniciar_Sessio/index.php');
                }
        //Si la contrasenya o mail no coincideixen torna a la pagina d'inici        
        }else{
            //Torna a la pagina d'inici
            header('Location:/Iniciar_Sessio/index.php');

        }
    }
}     
?>
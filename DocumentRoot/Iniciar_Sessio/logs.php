 <?php

//Funcio que obté l'ip remota del client
function obtenirIp(){
    //Emmagatzema l'ip en una variable
    $ip = $_SERVER['REMOTE_ADDR'];  
    return $ip;

    $ip = obtenirIp();
    echo "$ip";
}
//Funcio que obté l'hora remota del client
function obtenirHora(){
    //Defineix zona horaria
    date_default_timezone_set("Europe/Madrid");
    //Funció per obtenir la data actual i emmagatzema en variable
    $dataActual = date("H:i:s");
    return $dataActual;
}

//Funcio que determina quin es el navegador del usuari
function getBrowser($user_agent){

if(strpos($user_agent, 'MSIE') !== FALSE)
   return 'Internet explorer';
 elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
   return 'Microsoft Edge';
 elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
    return 'Internet explorer';
 elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
   return "Opera Mini";
 elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
   return "Opera";
 elseif(strpos($user_agent, 'Firefox') !== FALSE)
   return 'Mozilla Firefox';
 elseif(strpos($user_agent, 'Chrome') !== FALSE)
   return 'Google Chrome';
 elseif(strpos($user_agent, 'Safari') !== FALSE)
   return "Safari";
 else
   return 'No Se';

}

//Funcio que obté el navegador del usuari
function obteDades(){
  //Emmagatzema en variable el navegador del client
  $user_agent = $_SERVER['HTTP_USER_AGENT'];

  //Emmagatzema en variable el resultat de la funcio que determina el navegador.
  $navegador = getBrowser($user_agent);
 
  return "$navegador";
}

?>

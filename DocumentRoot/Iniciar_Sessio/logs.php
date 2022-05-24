 <?php


function obtenirIp(){
    $ip = $_SERVER['REMOTE_ADDR'];  
    return $ip;

    $ip = obtenirIp();
    echo "$ip";
}

function obtenirHora(){
    date_default_timezone_set("Europe/Madrid");
    $dataActual = date("H:i:s");
    return $dataActual;
}

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

function obteDades(){
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$navegador = getBrowser($user_agent);
 
//echo $navegador;
/*
$ip = obtenirIp();
//echo $ip;

$hora = obtenirHora();
//echo $hora;
*/
return "$navegador";
}

$navegador = obteDades();
echo "$navegador";

$ip = obtenirIp();
echo "$ip";

$hora = obtenirHora();
echo "$hora";

function query($conectar, $insertLog){
  
}

?>

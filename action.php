<?php

require_once("VoiceIt.php");
$myVoiceIt = new VoiceIt("ae6e25717c44451280823f8615ed454a");

$mail = $_POST["email"];
$password =  $_POST["password"];
$url = $_POST["linkDescarga"];
$idioma = "es-CO";

$blob = $url;

if($blob) {
    $filename = $mail.".wav";
    if($blob->export($filename)) {
        $dbResult = file_get_contents($filename);
    } else {
        throw new Exception("Can not save the file ".$filename."!");
    }
}

$response = $myVoiceIt->createEnrollment("$mail", "$password", "$url", "$idioma");

echo $mail;
echo $password;
echo $url;
echo $response;

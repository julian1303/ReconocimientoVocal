<?php

require_once("VoiceIt.php");
$myVoiceIt = new VoiceIt("ae6e25717c44451280823f8615ed454a");

$mail = $_POST["email"];
$password =  $_POST["password"];
$url = $_POST["linkDescarga"];

$response = $myVoiceIt->createEnrollment("$mail", "$password", "$url", "es-CO");

echo $response;


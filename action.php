<?php

require_once("VoiceIt.php");
$myVoiceIt = new VoiceIt("ae6e25717c44451280823f8615ed454a");

$encoded_data = $_POST['mydata'];
$binary_data = base64_decode( $encoded_data );

$email=  $_POST["email"];
$path="audios/{$email}.wav";
$result = file_put_contents( $path, $binary_data );


$password = $_POST["password"];    
$idioma = "es-CO";


$response = $myVoiceIt->createEnrollment("$email", "$password", "$path", "$idioma");

$text = guardarJson($response);

echo $text["Result"];

function guardarJson($response) {
    $file = 'datos.json';
    file_put_contents($file, $response);

    $data = file_get_contents("datos.json");
    $text = json_decode($data, true);

    return $text;
}

?>

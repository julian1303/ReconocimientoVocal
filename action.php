<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<script src="js/lib/recorder.js"></script>
    <script src="js/recordLive.js"></script>
</body>
</html>


<?php
require_once("VoiceIt.php");
$myVoiceIt = new VoiceIt("ae6e25717c44451280823f8615ed454a");

    /*
      Now myVoiceIt is an instance of the VoiceIt class and can be used to make various different API Calls, as documented below.
     */
      $accion = $_REQUEST["comentario"];
            //$response = $myVoiceIt->authentication("1234@122.com", "123456", "9.wav", "85", "es-CO");
      if ($accion === "Crear huella") {
        echo "<script>alert('hola');</script>";

    }


    ?>

    <a href="datos.json" target="_blank">Datos</a>


    <?php
    require_once("VoiceIt.php");
    $myVoiceIt = new VoiceIt("ae6e25717c44451280823f8615ed454a");

    /*
      Now myVoiceIt is an instance of the VoiceIt class and can be used to make various different API Calls, as documented below.
     */
    $response = $myVoiceIt->createUser("developer@voiceit-tech.com", "d0CHipUXOk", "John", "Doe", "530-956-7831", "", "");

    echo "<br>", json_encode($response);

    $file = 'datos.json';
    file_put_contents($file, $response);
    ?>

    <a href="datos.json" target="_blank">Datos</a>

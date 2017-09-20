
    <?php
    require_once("VoiceIt.php");
    $myVoiceIt = new VoiceIt("ae6e25717c44451280823f8615ed454a");

    /*
      Now myVoiceIt is an instance of the VoiceIt class and can be used to make various different API Calls, as documented below.
     */
      $accion = $_POST["accion"];
            //$response = $myVoiceIt->authentication("1234@122.com", "123456", "9.wav", "85", "es-CO");
        if ($accion === "Crear usuario") {

            $email = $_POST["email"];
            $password = $_POST["password"];
            $firsName = $_POST["firsName"];
            $lastName = $_POST["lastName"];
            $tel = $_POST["tel"];

            $response = $myVoiceIt->createUser($email, $password, $firsName, $lastName, $tel, "", "");
            echo "<a href='datos.json' target='_blank' >Usuario creado con exito</a>";
        }

    echo "<br>", json_encode($response);

    $file = 'datos.json';
    file_put_contents($file, $response);
    ?>

    <a href="datos.json" target="_blank">Datos</a>

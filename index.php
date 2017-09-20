<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form action="action.php"  method="post">
                <h3>Crear usuario</h3>                
                <fieldset>
                    <input placeholder="Nombres" type="text" name="firsName" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Apellidos" type="text" name="lastName" tabindex="2" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Correo electronico" type="email" name="email" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Telefono (Opcional)" type="tel" name="tel" tabindex="4" >
                </fieldset>
                <fieldset>
                    <input placeholder="Contraseña" type="password" name="password" tabindex="5" required>
                </fieldset>
                <fieldset>
                    <input value="Crear usuario" type="submit"  name="accion" id="contact-submit" data-submit="...Sending" >
                </fieldset>                
            </form>
        

        <?php
        /* require_once("VoiceIt.php");
          $myVoiceIt = new VoiceIt("ae6e25717c44451280823f8615ed454a");

          /*
          Now myVoiceIt is an instance of the VoiceIt class and can be used to make various different API Calls, as documented below.



          $response = $myVoiceIt->createUser("developer@voiceit-tech.com", "d0CHipUXOk", "John", "Doe", "530-956-7831", "", "");

          echo "<br>", json_encode($response);


          $response = $myVoiceIt->deleteUser("developer@voiceit-tech.com", "d0CHipUXOk");
          echo "<br>", json_encode($response);
         */

        /*
          $url = 'https://siv.voiceprintportal.com/sivservice/api/users';
          $headr = array();
          $headr[] = 'Accept: application/json';
          $headr[] = 'VsitEmail: ' . "developer@voiceit-tech.com";
          $headr[] = 'VsitPassword: ' . hash('sha256', "d0CHipUXOk");

          try {
          $crl = curl_init();

          if (FALSE === $crl)
          throw new Exception('failed to initialize');


          curl_setopt($crl, CURLOPT_URL, $url);
          curl_setopt($crl, CURLOPT_CUSTOMREQUEST, "DELETE");
          curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
          curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
          $reply = curl_exec($crl);

          $content = curl_exec($crl);

          if (FALSE === $content)
          throw new Exception(curl_error($crl), curl_errno($crl));

          // ...process $content now
          } catch (Exception $e) {

          trigger_error(sprintf(
          'Curl failed with error #%d: %s', $e->getCode(), $e->getMessage()), E_USER_ERROR);
          } */
        ?>

    </body>
</html>

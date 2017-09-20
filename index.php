<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <title></title>
    </head>
    <body>
      <div class="container">
        <form id="contact" action="index.php"  method="post">
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
      </div><!-- Crear usuario-->

      <div class="container">  
            <form id="contact" action="index.php" method="post">
                <h3>Eliminar usuario</h3>  
                <fieldset>
                    <input placeholder="Correo electronico" type="email" name="email" tabindex="6" required>
                </fieldset>                
                <fieldset>
                    <input placeholder="Contraseña" type="password" name="password" tabindex="7" required>
                </fieldset> 
                <fieldset>
                    <input value="Eliminar usuario" type="submit"  name="accion" id="contact-submit" data-submit="...Sending" >
                </fieldset>                
            </form>
        </div><!-- eliminar usuario-->

        <div class="container">  
            <form id="contact" action="index.php" method="post" target="TheWindow">
                <h3>Crear huella vocal</h3>   

                <fieldset>
                    <input placeholder="Correo electronico" type="email" name="email" tabindex="8" required>
                </fieldset>

                <fieldset>
                    <input placeholder="Contraseña" type="password" name="password" tabindex="9" required>
                </fieldset> 

                <fieldset>
                    <input placeholder="Tu voz" type="file" name="file" tabindex="10" required autofocus>
                </fieldset> 

                <fieldset>
                    Idioma
                    <select name="idioma">
                        <option>es-CO</option>
                        <option>en-US</option>
                    </select>   
                </fieldset>
                
                <fieldset>
                    <input value="Crear huella" type="submit"  name="accion" id="contact-submit" data-submit="...Sending" >
                </fieldset>  
          </form>
        </div><!-- crear huella vocal-->

        <div class="container">  
            <form id="contact" action="index.php" method="post">
                <h3>Autenticar</h3>   

                <fieldset>
                    <input placeholder="Correo electronico" type="email" name="email" tabindex="11" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Contraseña" type="password" name="password" tabindex="12" required>
                </fieldset> 

                <fieldset>
                    <input placeholder="Tu voz" type="file" name="file" tabindex="13" required autofocus>
                </fieldset>
                <fieldset>
                    <select name="idioma">
                        <option>es-CO</option>
                        <option>en-US</option>
                    </select>                                         
                    <fieldset>
                        <input value="autenticacion" type="submit"  name="accion" id="contact-submit" data-submit="...Sending" >
                    </fieldset>  

            </form>
        </div><!-- autenticar-->

    </body>
</html>

    <?php
        require_once("VoiceIt.php");
        $myVoiceIt = new VoiceIt("ae6e25717c44451280823f8615ed454a");

        $accion = $_POST["accion"];


        if ($accion === "Crear usuario") {

            $email = $_POST["email"];
            $password = $_POST["password"];
            $firsName = $_POST["firsName"];
            $lastName = $_POST["lastName"];
            $tel = $_POST["tel"];

            $response = $myVoiceIt->createUser($email, $password, $firsName, $lastName, $tel, "", "");

            $text = guardarJson($response);

            if ($text["Result"] == "Success") {
                echo "<script>alert('Usuario creado con exito')</script>";
            } else {
                $r = $text["Result"];
                echo "<script>alert('$r')</script>";
            }
        }

        if ($accion === "Eliminar usuario") {

            $email = $_POST["email"];
            $password = $_POST["password"];

            $response = $myVoiceIt->deleteUser("$email", "$password");

            $text = guardarJson($response);
            
            if ($text["Result"] == "Success") {
                echo "<script>alert('Usuario eliminado con exito')</script>";
            } else {
                $r = $text["Result"];
                echo "<script>alert('$r')</script>";
            }
        }

        function guardarJson($response) {
            $file = 'datos.json';
            file_put_contents($file, $response);

            $data = file_get_contents("datos.json");
            $text = json_decode($data, true);

            return $text;
        }

        
        ?>

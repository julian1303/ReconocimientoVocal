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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.0/sweetalert2.css">


    <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.0/sweetalert2.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script> 
    <title></title>
</head>

<body>
    <div class="container"><!-- Crear usuario-->
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
        </div>

    <div class="container"><!-- eliminar usuario-->  
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
        </div>

    <div id="CrearHuella" class="container"> <!-- crear huella vocal--> 
        <form id="myform" action="index.php" method="post">
            <h3>Crear huella vocal</h3>   

            <fieldset>
                <input id="correo" placeholder="Correo electronico" type="email" name="email" tabindex="8" required>
            </fieldset>

            <fieldset>
                <input id="pass" placeholder="Contraseña" type="password" name="password" tabindex="9" required>
            </fieldset>         
            <!--<fieldset>
              <input  placeholder="Tu voz" type="file" name="file" tabindex="1" required autofocus>
         </fieldset>-->
         <fieldset>
            Idioma
            <select name="idioma">
                <option>es-CO</option>
                <option>en-US</option>
            </select>   
        </fieldset>
        <fieldset>
                <button type="button" value="" onclick="Grabar2(this);" required >Record</button>
                <input id="mydata" type="hidden" name="mydata" value=""/>
                <input value="Crear huella" type="hidden"  name="accion"  >
        </fieldset> 

        <fieldset>
            <button id="CrearHuellaB"  type="button" onclick="loadBinary()">Crear huella</button>        
        </fieldset>  

        </form>
        </div>

    <!--
    <div class="container">
    <form id="contact" action="action.php" method="post">
        <fieldset>
         <button id="CrearHuellaB" value="Crear Huella" name="accion" type="button" onclick="loadBinary()">Crear huella</button>
         
            <input value="Imprimir" type="submit"  name="accion" id="contact-submit" data-submit="...Sending" >
        </fieldset>
    </form>
    </div>
    -->

    <div class="container"><!-- autenticar-->  
        <form id="myformA" action="index.php" method="post">
            <h3>Autenticar</h3>   

            <fieldset>
                <input placeholder="Correo electronico" type="email" name="email" tabindex="11" required>
            </fieldset>
            <fieldset>
                <input placeholder="Contraseña" type="password" name="password" tabindex="12" required>
            </fieldset>                   
            <fieldset>
                <select name="idioma">
                    <option>es-CO</option>
                    <option>en-US</option>
                </select>                                         
            <fieldset>
            <fieldset>
                <button id="linkWav" value="" type="button" onclick="Grabar2(this);" required data-submit="...Sending">Record</button>
            </fieldset> 
                <button type="button" onclick="loadBinaryA()" data-submit="...Sending">Autenticar</button>
                 <input value="autenticacion" type="hidden"  name="accion"  >
            </fieldset>  
            <input id="mydataA" type="hidden" name="mydata" value=""/>
        </form>
     </div>


    <script>//Pasando datos por Ajax
        function loadLog(){
            var correo = document.getElementById("correo").value;
            var contraseña = document.getElementById("pass").value;
            var linkDescarga = document.getElementById("linkWav").value;
            var buttonN = document.getElementById("CrearHuellaB").value;

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (xhttp.readyState == 4 && xhttp.status ==200){
                    swal({title: 'Correcto',text: xhttp.responseText, type: 'success',confirmButtonText: 'Cool'});

                }
            };

            xhttp.open("POST", "action.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhttp.send("email="+correo+"&password="+contraseña+"&linkDescarga="+linkDescarga+"&buttonAction"+buttonN+"");            
        }
        </script>

    <script>//Carga del binaryData para crear huella
        function loadBinary(){

            var data_uri = returnBinary();

            var raw_image_data = data_uri.result.replace(/^data\:audio\/\w+\;base64\,/, '');

            document.getElementById('mydata').value = raw_image_data;
            document.getElementById('myform').submit();
            

            //swal({title: 'Correcto',text: raw_image_data, type: 'success',confirmButtonText: 'Cool'});

        }
        </script>
    
    <script>//Carga del binaryData para autenticar
        function loadBinaryA(){

            var data_uri = returnBinary();

            var raw_image_data = data_uri.result.replace(/^data\:audio\/\w+\;base64\,/, '');

            document.getElementById('mydataA').value = raw_image_data;
            document.getElementById('myformA').submit();
            

            //swal({title: 'Correcto',text: raw_image_data, type: 'success',confirmButtonText: 'Cool'});

        }
        </script>

    <script>//Funcion que ejecuta el sweet
        function Grabar2(button){
            b=button;
            swal({
              title: 'Di: Mi voz es mi contraseña!',              
              text: 'Se cerrará automáticamente en 5 segundos',
              timer: 5000,
              onOpen: function () {
                Grabar(b);
                swal.showLoading();
                
                }
            }).then(
                function () {
                    
                },
              // handling the promise rejection
              function (dismiss) {

                if (dismiss === 'timer') {
                  console.log('I was closed by the timer')
              }
            }
            )
        }
        </script>

    <script src="js/lib/recorder.js"></script>
    <script src="js/recordLive.js"></script>



</body>
</html>

<?php
    require_once("VoiceIt.php");
    $myVoiceIt = new VoiceIt("ae6e25717c44451280823f8615ed454a");


    $accion = $_POST["accion"];

    if ($accion === "Crear usuario") {
        echo $accion;
        $email = $_POST["email"];
        $password = $_POST["password"];
        $firsName = $_POST["firsName"];
        $lastName = $_POST["lastName"];
        $tel = $_POST["tel"];

        $response = $myVoiceIt->createUser($email, $password, $firsName, $lastName, $tel, "", "");

        $text = guardarJson($response);

        if ($text["Result"] == "Success") {
            echo "<script>swal({title: 'Correcto',text: 'Registro exitoso', type: 'success',confirmButtonText: 'Cool'});</script>";
        } else {
            $r = $text["Result"];
            echo "<script>swal({ title: 'Error!',  text: ".$r.",  type: 'error',  confirmButtonText: 'Cool'})</script>";
        }
     }

    if ($accion === "Eliminar usuario") {

        $email = $_POST["email"];
        $password = $_POST["password"];

        $response = $myVoiceIt->deleteUser("$email", "$password");

        $text = guardarJson($response);

        if ($text["Result"] == "Success") {
            echo "<script>swal({title: 'Correcto',text: 'Autenticacion exitosa', type: 'success',confirmButtonText: 'Cool'});</script>";
        } else {
            $r = $text["Result"];
            echo "<script>swal({ title: 'Error!',  text: '$r',  type: 'error',  confirmButtonText: 'Cool'})</script>";
        }
     }

    if ($accion === "Crear huella") {

        $encoded_data = $_POST['mydata'];
        $binary_data = base64_decode( $encoded_data );

        $email=  $_POST["email"];
        $path="audios/{$email}.wav";
        $result = file_put_contents( $path, $binary_data );


        $password = $_POST["password"];    
        $idioma = $_POST["idioma"];
        echo $path;

        $response = $myVoiceIt->createEnrollment("$email", "$password", "$path", "$idioma");

        echo  $email;
        echo $password;
        echo $idioma;

        $text = guardarJson($response);
        $r = $text["Result"];
        $r2 = $text["DetectedVoiceprintText"];
        $r3 = $text["DetectedTextConfidence"];
        if ($text["Result"] == "Success") {
            echo "<script>swal({title: 'Correcto',text: 'Creacion de huella exitosa, frase detectada $r2 con una confidencialidad de $r3', type: 'success',confirmButtonText: 'Cool'});</script>";
        } else {
            echo "<script>swal({ title: 'Error!',  text: '$r hola',  type: 'error',  confirmButtonText: 'Cool'})</script>";
        }

     }

    if ($accion === "autenticacion") {

        $encoded_data = $_POST['mydata'];
        $binary_data = base64_decode( $encoded_data );

        $email=  $_POST["email"];
        $path="audios/{$email}.wav";
        $result = file_put_contents( $path, $binary_data );

        $password = $_POST["password"];
        $idioma = $_POST["idioma"];    

        $response = $myVoiceIt->authentication("$email", "$password", "$path", "80", "$idioma");

        $text = guardarJson($response);
        $r = $text["Result"];
        $r2 = $text["Confidence"];
        if ($text["ResponseCode"] == "SUC") {
            echo "<script>swal({title: 'Correcto',text: 'Autenticacion exitosa con una confidencialidad del $r2 ', type: 'success',confirmButtonText: 'Cool'});</script>";
        } else {
            echo "<script>swal({ title: 'Error!',  text: '$r',  type: 'error',  confirmButtonText: 'Cool'})</script>";
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

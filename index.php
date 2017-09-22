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

<div id="CrearHuella" class="container">  
    <form id="contact" action="index.php" method="post">
        <h3>Crear huella vocal</h3>   

        <fieldset>
            <input id="correo" placeholder="Correo electronico" type="email" name="email" tabindex="8" required>
        </fieldset>

        <fieldset>
            <input id="pass" placeholder="Contraseña" type="password" name="password" tabindex="9" required>
        </fieldset> 

        <fieldset>
            <button id="linkWav" value="" name="descarga" onclick="Grabar(this);">Record</button>
        </fieldset> 

        <fieldset>
            Idioma
            <select name="idioma">
                <option>es-CO</option>
                <option>en-US</option>
            </select>   
        </fieldset>

        <fieldset>
            <button id="CrearHuellaB" value="Crear Huella" type="button" onclick="loadLog()">Crear huella</button>
        </fieldset>  
    </form>
</div><!-- crear huella vocal-->

<div class="container">
<form id="contact" action="action.php" method="post">
    <fieldset>
            <input value="Imprimir" type="submit"  name="accion" id="contact-submit" data-submit="...Sending" >
        </fieldset>
</form>
</div>

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


    <script>
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
    
    <script src="js/lib/recorder.js"></script>
    <script src="js/recordLive.js"></script>

    

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

if ($accion === "Imprimir") {
    
    
}


if ($accion === "Crear huella") {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $url = $_POST["descarga"];
    $idioma = $_POST["idioma"];

    echo "<script>alert('$url')</script>";
    echo "$url";
    
}

if ($accion === "autenticacion") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $file = $_POST["file"];
    $idioma = $_POST["idioma"];    
    $response = $myVoiceIt->authentication("$email", "$password", "$file", "85", "$idioma");

    $text = guardarJson($response);

    if ($text["Result"] == "Success") {
        echo "<script>swal({title: 'Correcto',text: 'Autenticacion exitosa', type: 'success',confirmButtonText: 'Cool'});</script>";
    } else {
        $r = $text["Result"];
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

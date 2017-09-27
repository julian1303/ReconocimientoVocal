<!DOCTYPE html>
<html>
<head>
  <!--<link type="text/css" rel="stylesheet" href="css/PPzeXN.css"  />
  <link type="text/css" rel="stylesheet" href="css/PPzeXN.sass.css"  />-->
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.0/sweetalert2.css">     

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>
<!-- Modificaciones en los colores del active, linea 6074, icon 6392, checkbox 6601 & 6596, chulito 6727-->
<body style="background-color: #e4e8ec" >
  <div class="container picker__header"><!--Crear usuario -->
    <div class="row">
      <div class="col s12 m12 l6 offset-l3">
        <div class="col s12 card #212121 grey darken-4 z-depth-5">
          <div class="card-content white-text">
             <h3 class="center-align ">Crear Usuario</h3>
            <div class="row">
              <form class="col s10 offset-s1" action="index2.php"  method="post">
                <div>
                  <div class="input-field">
                    
                    <input class="validate" name="firsName" type="text" id="Nombre"   >
                    <label for="Nombre">Nombre</label>
                  </div>
                  <div class="input-field">
                    <!--<input class="validate" placeholder="Apellido" type="text" id="correo" name="correo">-->
                    <input id="last_name" name="lastName" type="text" class="validate">
                    <label for="last_name">Apellido</label>                    
                  </div>
                  <div class="input-field">
                    <input class="validate" name="email" type="email" id="Correo" name="pass">
                    <label for="Correo">Correo electronico</label>                    
                  </div>
                  <div class="input-field">
                    <i class="material-icons prefix">phone</i>
                    <input id="Telefono" name="tel" type="tel" class="validate">
                    <label for="Telefono">Telefono</label>                    
                  </div>
                  <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input class="validate" name="password" type="password" id="Contraseña">   
                    <label for="Contraseña">Contraseña</label>                 
                  </div>
                  <br>
                  <div class="center-align">
                    <input class="waves-effect waves-light btn #1565c0 blue darken-3 col s12" name="accion" type="submit" id="btn-submit" value="Crear usuario">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  <div class="container picker__header"><!--Eliminar Usuario-->
    <div class="row">
      <div class="col s12 m12 l6 offset-l3">
        <div class="col s12 card #212121 grey darken-4 z-depth-5">
          <div class="card-content white-text">
             <h3 class="center-align ">Eliminar Usuario</h3>
            <div class="row">
              <form class="col s10 offset-s1" action="index2.php"  method="post">
                <div>
                  <div class="input-field">
                    <input class="validate" type="email" id="Correo" name="email">
                    <label for="Correo">Correo electronico</label>                    
                  </div>
                  <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input class="validate"  type="password" id="Contraseña" name="password">   
                    <label for="Contraseña">Contraseña</label>
                  </div>
                  <br>
                  <div class="center-align">
                    <input class="waves-effect waves-light btn #1565c0 blue darken-3 col s12" type="submit" id="btn-submit" name="accion" value="Eliminar usuario">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>    
    </div>
  <div class="container picker__header"><!--Crear huella --> 
    <div class="row">
      <div class="col s12 m12 l6 offset-l3">
        <div class="col s12 card #212121 grey darken-4 z-depth-5">
          <div class="card-content white-text">
             <h3 class="center-align ">Crear huella vocal</h3>
            <div class="row">
              <form id="myform" class="col s10 offset-s1" action="index2.php" method="post">
                <div>
                  <div class="input-field">
                    <input class="validate" type="email" id="correo" name="email">
                    <label for="correo">Correo electronico</label>                    
                  </div>                  
                  <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input class="validate"  type="password" id="Contraseña" name="password">   
                    <label for="Contraseña">Contraseña</label>                 
                  </div>
                  <div class="input-field grey-text ">
                     <i class="material-icons prefix  white-text">g_translate</i>
                    <select id="selector" name="idioma">        
                      <!--Cambio de color en 5476-->            
                      <option value="" disabled selected>Idioma</option>
                      <option value="es-CO">Español</option>
                      <option value="en-US">Ingles</option>
                    </select>
                  </div>
                  <br>
                  <div class="center-align">
                    <button  class="btn btn-floating pulse waves-light red" type="button" value="" onclick="Grabar2(this);" required ><i class="material-icons left">fiber_manual_record</i></button><label for="Contraseña"><h5>Grabar</h4></label>
                    <input id="mydata" type="hidden" name="mydata" value=""/>
                    <input value="Crear huella" type="hidden"  name="accion"  >
                  </div>
                  <br>
                  <div class="center-align">
                    <input class="waves-effect waves-light btn #1565c0 blue darken-3 col s12" onclick="loadBinary()" type="button" id="btn-submit" value="Enviar">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  <div class="container picker__header"><!--Autenticar --> 
    <div class="row">
      <div class="col s12 m12 l6 offset-l3">
        <div class="col s12 card #212121 grey darken-4 z-depth-5">
          <div class="card-content white-text">
             <h3 class="center-align ">Autenticar</h3>
            <div class="row">
              <form id="myformA" class="col s10 offset-s1" action="index2.php" method="post">
                <div>
                  <div class="input-field">
                    <input class="validate" type="email" id="correo" name="email">
                    <label for="correo">Correo electronico</label>                    
                  </div>                  
                  <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input class="validate"  type="password" id="Contraseña" name="password">   
                    <label for="Contraseña">Contraseña</label>                 
                  </div>
                  <div class="input-field grey-text ">
                     <i class="material-icons prefix  white-text">g_translate</i>
                    <select id="selector" name="idioma">        
                      <!--Cambio de color en 5476-->             
                      <option value="" disabled selected>Idioma</option>
                      <option value="es-CO">Español</option>
                      <option value="en-US">Ingles</option>
                    </select>
                  </div>
                  <br>
                  <div class="center-align">
                    <button  class="btn btn-floating pulse waves-light red" type="button" value="" onclick="Grabar2(this);" required ><i class="material-icons left">fiber_manual_record</i></button><label for="Contraseña"><h5>Grabar</h4></label>
                    <input id="mydataA" type="hidden" name="mydata" value=""/>
                    <input value="autenticacion" type="hidden"  name="accion"  >
                  </div>
                  <br>
                  <div class="center-align">
                    <input class="waves-effect waves-light btn #1565c0 blue darken-3 col s12"  onclick="loadBinaryA()" type="button" id="btn-submit" value="Enviar">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  

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
            var idioma = document.getElementById("selector").value;


            if(idioma="es-CO"){
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
            else{
                   swal({
                title: 'Say: My voice is my password!',              
                text: 'Will automatically close in 5 seconds',
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
           
        }
        </script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.0/sweetalert2.js"></script>
  
  <script src="js/lib/recorder.js"></script>
  <script src="js/recordLive.js"></script>

  <script >
     $(document).ready(function() {
    $('select').material_select();
  });
  </script>

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

        /*echo "Ruta: ",$path,"<br>";
        echo "Correo: ",$email, "<br>";
        echo "Contraseña: ",$password, "<br>";
        echo "Idioma: ",$idioma, "<br>";*/

        $response = $myVoiceIt->createEnrollment("$email", "$password", "$path", "$idioma");



        $text = guardarJson($response);
        $r = $text["Result"];
        if ($text["Result"] == "Success") {          
            $r2 = $text["DetectedVoiceprintText"];
            $r3 = $text["DetectedTextConfidence"];
            echo "<script>swal({title: 'Correcto',text: 'Creacion de huella exitosa, frase detectada $r2 con una confidencialidad de $r3', type: 'success',confirmButtonText: 'Cool'});</script>";
        } else {
            echo "<script>swal({ title: 'Error!',  text: '$r',  type: 'error',  confirmButtonText: 'Cool'})</script>";
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
        if ($text["ResponseCode"] == "SUC") {

        $r2 = $text["Confidence"];
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
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
                    <input class=" waves-light btn #1565c0 blue darken-3 col s12" name="accion" type="submit" id="btn-submit" value="Crear usuario">
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
                    <input class=" waves-light btn #1565c0 blue darken-3 col s12" type="submit" id="btn-submit" name="accion" value="Eliminar usuario">
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
                    <select id="selectorC" name="idioma">        
                      <!--Cambio de color en 5476, felcha en 7024-->            
                      <option value="" disabled selected>Idioma</option>
                      <option value="es-CO">Español</option>
                      <option value="en-US">Ingles</option>
                    </select>
                  </div>
                  <br>
                  <div class="center-align">
                    <button  class="btn btn-floating waves-light white" type="button" value="" onclick="Grabar2(this);" required ><i class="material-icons left black-text">mic</i></button><label><h5>Grabar</h5></label>

                    <input id="mydata1" type="hidden" name="mydata1" value=""/>
                    <input id="mydata2" type="hidden" name="mydata2" value=""/>
                    <input id="mydata3" type="hidden" name="mydata3" value=""/>
                    <input value="Crear huella" type="hidden"  name="accion"  >
                  </div>
                  <br>
                  <div class="center-align">
                    <input class=" waves-light btn #1565c0 blue darken-3 col s12" onclick="loadBinary()" type="button" id="btn-submit" value="Enviar">
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
                    <select id="selectorA" name="idioma">        
                      <!--Cambio de color en 5476-->             
                      <option value="" disabled selected>Idioma</option>
                      <option value="es-CO">Español</option>
                      <option value="en-US">Ingles</option>
                    </select>
                  </div>
                  <br>
                  <div class="center-align">
                    
                    <button  class="btn btn-floating waves-light white" type="button" value="" onclick="Grabar2(this);" required ><i class="material-icons left black-text">mic</i></button><label><h5>Grabar</h5></label>

                    <input id="mydataA1" type="hidden" name="mydataA1" value=""/>
                    <input id="mydataA2" type="hidden" name="mydataA2" value=""/>
                    <input id="mydataA3" type="hidden" name="mydataA3" value=""/>
                    <input value="autenticacion" type="hidden"  name="accion"  >
                  </div>
                  <br>
                  <div class="center-align">
                    <input class=" waves-light btn #1565c0 blue darken-3 col s12"  onclick="loadBinaryA()" type="button" id="btn-submit" value="Enviar">
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

            var data_uri1 = returnBinary1();
            var data_uri2 = returnBinary2();
            var data_uri3 = returnBinary3();

            var raw_image_data1 = data_uri1.result.replace(/^data\:audio\/\w+\;base64\,/, '');
            var raw_image_data2 = data_uri2.result.replace(/^data\:audio\/\w+\;base64\,/, '');
            var raw_image_data3 = data_uri3.result.replace(/^data\:audio\/\w+\;base64\,/, '');

            //alert(raw_image_data1);

            document.getElementById('mydata1').value = raw_image_data1;
            document.getElementById('mydata2').value = raw_image_data2;
            document.getElementById('mydata3').value = raw_image_data3;
            document.getElementById('myform').submit();
            

            //swal({title: 'Correcto',text: raw_image_data, type: 'success',confirmButtonText: 'Cool'});

        }
        </script>

  <script>//Carga del binaryData para autenticar
        function loadBinaryA(){

            var data_uri = returnBinary();

            var raw_image_data1 = data_uri[0].result.replace(/^data\:audio\/\w+\;base64\,/, '');
            var raw_image_data2 = data_uri[1].result.replace(/^data\:audio\/\w+\;base64\,/, '');
            var raw_image_data3 = data_uri[2].result.replace(/^data\:audio\/\w+\;base64\,/, '');

            document.getElementById('mydataA1').value = raw_image_data1;
            document.getElementById('mydataA2').value = raw_image_data2;
            document.getElementById('mydataA3').value = raw_image_data3;
            document.getElementById('myform').submit()
            

            //swal({title: 'Correcto',text: raw_image_data, type: 'success',confirmButtonText: 'Cool'});

        }
        </script>

  <script>//Funcion que ejecuta el sweet
        function Grabar2(button){
          b=button;
          var idiomaC = document.getElementById("selectorC").value;
          var idiomaA = document.getElementById("selectorA").value;

          if(idiomaC=="es-CO" || idiomaA=="es-CO"){

              swal({          
                html: "<i class='material-icons medium blue-text'>filter_1</i> <h5><b>Graba tu huella vocal</b></h5> Primera grabacion <br><br> Pulsa para grabar<br> Despues di: <b>Mi voz es mi contraseña</b>",
                type: '',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '<i class="material-icons left ">mic</i>',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-floating waves-light black',                    
                buttonsStyling: false,
                allowOutsideClick: false
              }).then(function () {
                                  var sound = new Audio('sound.wav');
                                  sound.play();
                                  setTimeout(function(){
                                    var audio = new Audio('beep.wav');
                                    audio.play();
                                    Grabar3(b);
                                  },4000)

                                  setTimeout(function(){
                                    swal({
                                      html: "<i class='material-icons medium blue-text'>filter_2</i> <h5><b>Graba tu huella vocal</b></h5> <br> Segunda grabacion <br><br> Pulsa para grabar<br> Despues di: <b>Mi voz es mi contraseña</b>",
                                        type: '',
                                        showCancelButton: false,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: '<i class="material-icons left ">mic</i>',
                                        cancelButtonText: 'No, cancel!',
                                        confirmButtonClass: 'btn btn-floating waves-light black',                    
                                        buttonsStyling: false,
                                        allowOutsideClick: false
                                    }).then(function () {
                                                        sound.play();
                                                        setTimeout(function(){
                                                          var audio = new Audio('beep.wav');
                                                          audio.play();
                                                          Grabar3(b);
                                                        },4000)

                                                        setTimeout(function(){
                                                        swal({
                                                          html: "<i class='material-icons medium blue-text'>filter_3</i> <h5><b>Graba tu huella vocal</b></h5> <br> Tercera grabacion <br><br> Pulsa para grabar<br> Despues di: <b>Mi voz es mi contraseña</b>",
                                                            type: '',
                                                            showCancelButton: false,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: '<i class="material-icons left ">mic</i>',
                                                            cancelButtonText: 'No, cancel!',
                                                            confirmButtonClass: 'btn btn-floating waves-light black',                    
                                                            buttonsStyling: false,
                                                            allowOutsideClick: false
                                                        }).then(function () {
                                                                            sound.play();
                                                                            setTimeout(function(){
                                                                              var audio = new Audio('beep.wav');
                                                                              audio.play();
                                                                              Grabar3(b);
                                                                            },4000)
                                                        })
                                                      },9200);
                                      
                                    })
                                  },9200);



              }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                  swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                  )
                }
              })

          }else{

              swal({          
                html: "<i class='material-icons medium blue-text'>filter_1</i> <h5><b>Record your fingerprint</b></h5> First recording <br><br> Press to record<br> After Say: <b>Never forget tomorrow is a new day</b>",
                type: '',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '<i class="material-icons left ">mic</i>',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-floating waves-light black',                    
                buttonsStyling: false,
                allowOutsideClick: false
              }).then(function () {
                                  Grabar3(b);
                                  var audio = new Audio('beep.wav');
                                  audio.play();
                                  setTimeout(function(){
                                    swal({
                                      html: "<i class='material-icons medium blue-text'>filter_1</i> <h5><b>Record your fingerprint</b></h5> Second recording <br><br> Press to record<br> After Say: <b>Never forget tomorrow is a new day</b>",
                                        type: '',
                                        showCancelButton: false,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: '<i class="material-icons left ">mic</i>',
                                        cancelButtonText: 'No, cancel!',
                                        confirmButtonClass: 'btn btn-floating waves-light black',                    
                                        buttonsStyling: false,
                                        allowOutsideClick: false
                                    }).then(function () {
                                                        Grabar3(b);
                                                        audio.play();
                                                        setTimeout(function(){
                                                        swal({
                                                          html: "<i class='material-icons medium blue-text'>filter_1</i> <h5><b>Record your fingerprint</b></h5> Third recording <br><br> Press to record<br> After Say: <b>Never forget tomorrow is a new day</b>",
                                                            type: '',
                                                            showCancelButton: false,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: '<i class="material-icons left ">mic</i>',
                                                            cancelButtonText: 'No, cancel!',
                                                            confirmButtonClass: 'btn btn-floating waves-light black',                    
                                                            buttonsStyling: false,
                                                            allowOutsideClick: false
                                                        }).then(function () {
                                                                            Grabar3(b);
                                                                            audio.play();
                                                        })
                                                      },5200);
                                      
                                    })
                                  },5200);



              }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                  swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                  )
                }
              })
          }

        
        }
        </script>

        <script>
          
          function Grabar3(button){

            b=button;
            var idiomaC = document.getElementById("selectorC").value;
            var idiomaA = document.getElementById("selectorA").value;

            if(idiomaC=="es-CO" || idiomaA=="es-CO"){
                       swal({
                    html: " <h5><b>Grabando</b></h5> <br> <button  class='btn btn-floating pulse waves-light red' type='button'><i class='material-icons left'>fiber_manual_record</i></button> <br><br> <b>Di: Mi voz es mi contraseña</b>  <br> La grabacion finalizara en 5 segundos!!",            
                    text: 'Se cerrará automáticamente en 5 segundos',
                    showConfirmButton: false,
                    timer: 5000,
                    allowOutsideClick: false,
                    onOpen: function () {
                      Grabar(b);
                      
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
                  html: " <h5><b>Recording</b></h5> <br> <button  class='btn btn-floating pulse waves-light red' type='button'><i class='material-icons left'>fiber_manual_record</i></button> <br><br> <b>Say: Never forget tomorrow is a new day</b>  <br> The recording ended in 5 seconds!!",            
                  text: 'Se cerrará automáticamente en 5 segundos',
                  showConfirmButton: false,
                  timer: 5000,
                  allowOutsideClick: false,
                  onOpen: function () {
                    Grabar(b);
                    
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

        $encoded_data1 = $_POST['mydata1'];
        $encoded_data2 = $_POST['mydata2'];
        $encoded_data3 = $_POST['mydata3'];

        
        $binary_data1 = base64_decode( $encoded_data1 );
        $binary_data2 = base64_decode( $encoded_data2 );
        $binary_data3 = base64_decode( $encoded_data3 );

        $email=  $_POST["email"];

        $path1="audios/{$email}1.wav";
        $path2="audios/{$email}2.wav";
        $path3="audios/{$email}3.wav";

        $result1 = file_put_contents( $path1, $binary_data1 );
        $result2 = file_put_contents( $path2, $binary_data2 );
        $result3 = file_put_contents( $path3, $binary_data3 );

        
        $password = $_POST["password"];    
        $idioma = $_POST["idioma"];

        /*echo "Ruta: ",$path,"<br>";
        echo "Correo: ",$email, "<br>";
        echo "Contraseña: ",$password, "<br>";
        echo "Idioma: ",$idioma, "<br>";*/

        $response1 = $myVoiceIt->createEnrollment("$email", "$password", "$path1", "$idioma");
        $response2 = $myVoiceIt->createEnrollment("$email", "$password", "$path2", "$idioma");
        $response3 = $myVoiceIt->createEnrollment("$email", "$password", "$path3", "$idioma");



        $text1 = guardarJson($response1);
        $text2 = guardarJson($response2);
        $text3 = guardarJson($response3);

        $r1 = $text1["Result"];

        if ($text1["Result"] == "Success" && $text2["Result"] == "Success" && $text3["Result"] == "Success") {          
            $r12 = $text1["DetectedVoiceprintText"];
            $r13 = $text1["DetectedTextConfidence"];


            $r22 = $text2["DetectedVoiceprintText"];
            $r23 = $text2["DetectedTextConfidence"]; 


            $r32 = $text3["DetectedVoiceprintText"];
            $r33 = $text3["DetectedTextConfidence"]; 

            echo "<script>setTimeout(function(){
                
              swal({
                    title: 'Correcto',
                    text: 'Creacion de huella 1 exitosa, frase detectada $r12 con una confidencialidad de $r13 %',
                    type: 'success',
                    timer: 5000,
                    onOpen: function () {
                      swal.showLoading()
                    }
                  }).then(
                    function () {},
                    // handling the promise rejection
                    function (dismiss) {
                      if (dismiss === 'timer') {
                        console.log('I was closed by the timer')
                      }
                    }
                  )
              },500);
              </script>";

            echo "<script>setTimeout(function(){
                
              swal({
                    title: 'Correcto',
                    text: 'Creacion de huella 2 exitosa, frase detectada $r22 con una confidencialidad de $r23 %',
                    type: 'success',
                    timer: 5000,
                    onOpen: function () {
                      swal.showLoading()
                    }
                  }).then(
                    function () {},
                    // handling the promise rejection
                    function (dismiss) {
                      if (dismiss === 'timer') {
                        console.log('I was closed by the timer')
                      }
                    }
                  )
              },6000);
              </script>";

            echo "<script>setTimeout(function(){
                
              swal({
                    title: 'Correcto',
                    text: 'Creacion de huella 3 exitosa, frase detectada $r32 con una confidencialidad de $r33 %',
                    type: 'success',
                    timer: 5000,
                    onOpen: function () {
                      swal.showLoading()
                    }
                  }).then(
                    function () {},
                    // handling the promise rejection
                    function (dismiss) {
                      if (dismiss === 'timer') {
                        console.log('I was closed by the timer')
                      }
                    }
                  )
              },12000);
              </script>";

        } 
        else {
            $r2 = $text2["Result"];
            $r2 = $text2["Result"];

            if($text1["Result"] != "Success"){
              echo "<script>swal({ title: 'Error!',  text: '$r1',  type: 'error',  confirmButtonText: 'OK'})</script>";
            }
            else{

              if($text2["Result"] != "Success"){
                echo "<script>swal({ title: 'Error!',  text: '$r2',  type: 'error',  confirmButtonText: 'OK'})</script>";
              }
              else{
                if($text3["Result"] != "Success"){
                  echo "<script>swal({ title: 'Error!',  text: '$r3',  type: 'error',  confirmButtonText: 'OK'})</script>";
                }
              }
            }
            
        
            
            
        
            
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
             echo "<script><script>setTimeout(function(){
                
              swal({title: 'Correcto',text: 'Autenticacion exitosa con una confidencialidad del $r2 ', type: 'success',confirmButtonText: 'Cool'});

              },3500);

              </script>";

            
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
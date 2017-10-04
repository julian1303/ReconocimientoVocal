<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Home</title>

    <!--Let browser know website is optimized for mobile-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->

    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.0/sweetalert2.css"> 
    <!--  Materialize Scripts-->
    <!--  SweetAleert2-->
    <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
</head>
  
<body>
  
  <div class="navbar-fixed"><!-- Menu principal-->
      <nav class="white" role="navigation">
        <div class="nav-wrapper container">
          <ul id="slide-out" class="side-nav">
            <li><a href=".">Home</a></li>           
            <li><a href="\ReconocimientoFacial\VoiceIt3\index.php">Reconocimiento Vocal</a></li>
          </ul>
          <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
          <a id="logo-container" href="." class="brand-logo"></a>
          <ul class="right hide-on-med-and-down">            
            <li><a href="\ReconocimientoFacial\VoiceIt3\index.php">Reconocimiento Vocal</a></li>
          </ul>
          <ul id="nav-mobile" class="side-nav">            
            <li><a href="\ReconocimientoFacial\VoiceIt3\index.php">Reconocimiento Vocal</a></li>
          </ul>        
        </div>
      </nav>
  </div>

  <!-- Parallax 
    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
           <div class="row center">
          <h3 class="header col s12 ">Reconocimiento de voz</h3>
           </div>
          <div class="row center">
            <h5 class="header col s12 light">Bienvenido al módulo de reconocimiento de voz</h5>
          </div>
          <div class="row center">
            <a href="#registro" id="download-button" class="btn-large waves-effect waves-light #1565c0 blue darken-3">Registrarse</a>
          </div>
          <br><br>

        </div>
      </div>
      <div class="parallax">
        <img  src="http://www.serbanbiometrics.es/images/ReconocimientoVoz.jpg" alt="Unsplashed background img 1">
      </div>
    </div>
  -->
  
  <br><br>

  <div class="container picker__header"><!--Eliminar Usuario-->
    <div class="row">
      <div class="col s12 m12 l6 offset-l3">
        <div class="col s12 card #212121 grey darken-4 z-depth-5">
          <div class="card-content white-text">
             <h3 class="center-align ">Eliminar Usuario</h3>
            <div class="row">
              <form id="EliminarUsuarioform" class="col s10 offset-s1" action="index.php"  method="post">
                <div>
                  <div class="input-field">
                    <input class="validate" type="email" id="CorreoEliminarUsuario" name="email" onblur="validarCorreo('CorreoEliminarUsuario')">
                    <label class="valign-wrapper" for="Correo">Correo electronico</label>                    
                  </div>
                  <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input class="validate"  type="password" id="ContraseñaEliminarUsuario" name="password">   
                    <label class="valign-wrapper" for="Contraseña">Contraseña</label>
                    <input value="Eliminar usuario" type="hidden"  name="accion"  >
                  </div>
                  <br>
                  <div class="center-align">
                    <input class=" waves-light btn #1565c0 blue darken-3 col s12" type="button" onclick="validarFormEliminarUsuario()" id="btn-submit" name="accion" value="Eliminar usuario">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>    
    </div>
  
  

  <br><br>

  <footer class="page-footer #1a237e indigo darken-4">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Sobre nosotros</h5>
            <p class="grey-text text-lighten-4">Somos estudiantes de último semestre de ingeniería de sistemas de la universidad Industrial de Santander, actualmente estamos desarrollando nuestro proyecto orientado en métodos de autenticación biométrica.</p>
          
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Desarrollado con</h5>
            <ul>
              <li><a class="white-text" href="https://aws.amazon.com/es/rekognition/">Amazon Rekognition</a></li>
              <li><a class="white-text" href="http://materializecss.com/">Materializecss</a></li>
              <li><a class="white-text" href="https://limonte.github.io/sweetalert2/">SweetAlert2</a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Repositorios</h5>
            <ul>
              <li><a class="github-button" href="https://github.com/davidjurado/ReconocimientoFacial" data-size="large" aria-label="Star davidjurado/ReconocimientoFacial on GitHub">ReconocimientoFacial</a></li>
              <li><a class="github-button" href="https://github.com/julian1303/ReconocimientoVocal" data-size="large" aria-label="Star julian1303/ReconocimientoVocal on GitHub">ReconocimientoVocal</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        &copy;2017 Universidad Industrial de Santander
        </div>
      </div>
  </footer>


  <script>//Validaciones
    /*        
            function validarContraseña(){

              var minNumberofChars = 6;

              var Contra1 = document.getElementById('CUContraseña').value;
              var Contra2 = document.getElementById('ConfirmarContraseña').value;

              if (Contra1 != Contra2){        
                document.getElementById('CUContraseña').className="validate invalid";
                document.getElementById('ConfirmarContraseña').className="validate invalid";
              }
              else{
                if(Contra1.length < minNumberofChars){
                  document.getElementById('CUContraseña').className="validate invalid";
                  document.getElementById('ConfirmarContraseña').className="validate invalid"; 
                }
                else{
                  document.getElementById('CUContraseña').className="validate valid";
                  document.getElementById('ConfirmarContraseña').className="validate valid";
                }
              }
            }
    */
        function validarCorreo(e){
          var id = e;
          var correo = document.getElementById(id).value;
          
          expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

          if ( !expr.test(correo) ){
            document.getElementById(id).className="validate invalid";
          }      
          else{
            document.getElementById(id).className="validate valid";
          }
        }
    /*
            function ValidateNumberOnly(){
              if ((event.keyCode < 48 || event.keyCode > 57)){
                if(event.keyCode!=8){
                  event.returnValue = false;
                }
              }
            }

            function validarFormCrearUsuario(){

                var validateStateContraseña = document.getElementById('CUContraseña').className;
                var validateStateCContraseña = document.getElementById('ConfirmarContraseña').className;
                var validateStateCorreo = document.getElementById('correoCrearUsuario').className;

                var Contra1 = document.getElementById('CUContraseña').value;
                var Contra2 = document.getElementById('ConfirmarContraseña').value;
                var minNumberofChars = 6;

                if(document.getElementById('Nombre').value!="" && document.getElementById('Apellido').value!="" && document.getElementById('correoCrearUsuario').value!="" && document.getElementById('CUContraseña').value!="" && document.getElementById('ConfirmarContraseña').value!="" && document.getElementById('Telefono').value!=""){

                  if(validateStateContraseña!="validate invalid" &&  validateStateCContraseña!="validate invalid"){
                      if(validateStateCorreo != "validate invalid"){
                        document.getElementById('FormCrearUsuario').submit();
                      }
                      else{
                        swal({ title: 'Error!',  html: 'El correo debe tener el siguente formato <br> <b>xxxxxx@xxxx.com</b>',  type: 'error',  confirmButtonText: 'OK'})
                      }
                  }
                  else{
                    
                    if(Contra1.length < minNumberofChars || Contra2.length < minNumberofChars){
                      swal({ title: 'Error!',  text: 'La contraseña debe tener minimo 6 caracteres',  type: 'error',  confirmButtonText: 'OK'})
                      
                    }
                    else{
                        swal({ title: 'Error!',  text: 'La contraseña no coincide',  type: 'error',  confirmButtonText: 'OK'})
                    }
                  }


                }
                else{
                    swal({ title: 'Error!',  text: 'Debe ingresar todos los campos',  type: 'error',  confirmButtonText: 'OK'})
                }
            }
    */
        function validarFormEliminarUsuario(){

            var validateStateContraseña = document.getElementById('ContraseñaEliminarUsuario').className;
            var validateStateCorreo = document.getElementById('CorreoEliminarUsuario').className;

            if(document.getElementById('CorreoEliminarUsuario').value!="" && document.getElementById('ContraseñaEliminarUsuario').value!=""){

              if(validateStateContraseña!="validate invalid"){
                  if(validateStateCorreo != "validate invalid"){
                    document.getElementById('EliminarUsuarioform').submit();
                  }
                  else{
                    swal({ title: 'Error!',  html: 'El correo debe tener el siguente formato <br> <b>xxxxxx@xxxx.com</b>',  type: 'error',  confirmButtonText: 'OK'})
                  }
              }
              else{
                swal({ title: 'Error!',  text: 'La contraseña no coincide',  type: 'error',  confirmButtonText: 'OK'})
              }


            }
            else{
                swal({ title: 'Error!',  text: 'Debe ingresar todos los campos',  type: 'error',  confirmButtonText: 'OK'})
            }
        }
    /*
            function validarFormCrearHuella(){

                var validateStateContraseña = document.getElementById('ContraseñaCrearHuella').className;
                var validateStateCorreo = document.getElementById('correoCrearHuella').className;
                var idioma = document.getElementById('selectorC').value;
                

                if(idioma == "en-US"){

                    if(document.getElementById('correoCrearHuella').value!="" && document.getElementById('ContraseñaCrearHuella').value!="" ){
                      
                        if(validateStateCorreo != "validate invalid"){
                              loadBinary(idioma);
                        }
                        else{
                          swal({ title: 'Error!',  html: 'The email should have the following format <br> <b>xxxxxx@xxxx.com</b>',  type: 'error',  confirmButtonText: 'OK'})
                        }                                                    
                    }
                    else{
                        swal({ title: 'Error!',  text: 'You must enter all the fields',  type: 'error',  confirmButtonText: 'OK'})
                    }
                }
                else{
                
                    if(document.getElementById('correoCrearHuella').value!="" && document.getElementById('ContraseñaCrearHuella').value!="" ){
                      
                      if(document.getElementById('selectorC').value!=""){    
                          if(validateStateCorreo != "validate invalid"){
                                loadBinary(idioma);
                          }
                          else{
                            swal({ title: 'Error!',  html: 'El correo debe tener el siguente formato <br> <b>xxxxxx@xxxx.com</b>',  type: 'error',  confirmButtonText: 'OK'})
                          }                
                      }
                      else{
                        swal({ title: 'Error!',  text: 'Por favor seleccione un idioma',  type: 'error',  confirmButtonText: 'OK'})
                      }
                      
                    }
                    else{
                        swal({ title: 'Error!',  text: 'Debe ingresar todos los campos',  type: 'error',  confirmButtonText: 'OK'})
                    }
              }
            }

            function validarFormAutenticar(){

                var validateStateContraseña = document.getElementById('ContraseñaAutenticar').className;
                var validateStateCorreo = document.getElementById('CorreoAutenticar').className;
                var idioma = document.getElementById('selectorA').value;

                if(idioma == "en-US"){

                    if(document.getElementById('CorreoAutenticar').value!=="" && document.getElementById('ContraseñaAutenticar').value!=="" ){
                      
                        if(validateStateCorreo != "validate invalid"){
                              loadBinaryA(idioma);
                        }
                        else{
                          swal({ title: 'Error!',  html: 'The email should have the following format <br> <b>xxxxxx@xxxx.com</b>',  type: 'error',  confirmButtonText: 'OK'})
                        }

                    }
                    else{
                        swal({ title: 'Error!',  text: 'You must enter all the fields',  type: 'error',  confirmButtonText: 'OK'})
                    }

                }
                else{ 
                  if(document.getElementById('CorreoAutenticar').value!=="" && document.getElementById('ContraseñaAutenticar').value!=="" ){
                    
                    if(document.getElementById('selectorA').value!=""){

                      if(validateStateCorreo != "validate invalid"){
                            loadBinaryA(idioma);
                      }
                      else{
                        swal({ title: 'Error!',  html: 'El correo debe tener el siguente formato <br> <b>xxxxxx@xxxx.com</b>',  type: 'error',  confirmButtonText: 'OK'})
                      }

                    }
                    else{
                      swal({ title: 'Error!',  text: 'Por favor seleccione un idioma',  type: 'error',  confirmButtonText: 'OK'})
                    }
                    
                  }
                  else{
                      swal({ title: 'Error!',  text: 'Debe ingresar todos los campos',  type: 'error',  confirmButtonText: 'OK'})
                  }
                }
            }
    */
        function validarSeleccionIdioma(button){

            
            
            if(button.value=="autenticar"){
              
              var res =document.getElementById('selectorA').value;
              
              if(document.getElementById('selectorA').value!==""){                
                return true;
              }
              else{
                swal({ title: 'Error!',  text: 'Por favor selecciona un idioma',  type: 'error',  confirmButtonText: 'OK'})
                return false;
              }
            }
            else{
              
              if(document.getElementById('selectorC').value!==""){
                return true;
              }
              else{
                swal({ title: 'Error!',  text: 'Por favor seleccion un idioma',  type: 'error',  confirmButtonText: 'OK'})
                return false;
              }
            }
        }
  </script>

  <script>//Carga del binaryData para crear huella
        function loadBinary(e){

            var data_uri1 = returnBinary1();
            if(data_uri1 == undefined){
              if(e=="es-CO"){
                swal({ title: 'Error!',  text: 'Debe realizar las grabaciones para la creación de la huella',  type: 'error',  confirmButtonText: 'OK'})
              }
              else{
              swal({ title: 'Error!',  text: 'You must do the recordings for the creation of the fingerprint',  type: 'error',  confirmButtonText: 'OK'})
              }
            }
            
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
            

            //swal({title: 'Correcto',text: raw_image_data, type: 'success',confirmButtonText: 'Aceptar'});

        }
  </script>

  <script>//Carga del binaryData para autenticar
        function loadBinaryA(e){
           

            var data_uri = returnBinary();
            
            if(data_uri == undefined){

              if(e=="es-CO"){
                swal({ title: 'Error!',  text: 'Debe realizar la grabacion para poder autenticarse',  type: 'error',  confirmButtonText: 'OK'})
              }
              else{
              swal({ title: 'Error!',  text: 'You must perform the recording to be able to authenticate',  type: 'error',  confirmButtonText: 'OK'})
              }
            }            

            var raw_image_data = data_uri.result.replace(/^data\:audio\/\w+\;base64\,/, '');

            document.getElementById('mydataA').value = raw_image_data;
            document.getElementById('myformA').submit()
            

            //swal({title: 'Correcto',text: raw_image_data, type: 'success',confirmButtonText: 'Aceptar'});

        }
  </script>

  <script>//Funcion que ejecuta la accion de grabar 3 veces
        function Grabar2(button){          
          
          b=button;
          var seleccionIdioma = validarSeleccionIdioma(button);        
          

          if(seleccionIdioma==true){

                    var sound = new Audio('sound.wav');
                    var beep = new Audio('beep.wav');
                    var id = button.value;
                    if(id=="autenticar"){
                      var idioma = document.getElementById("selectorA").value;  
                    }
                    else{
                      var idioma = document.getElementById("selectorC").value;  
                    }
                    

                    if(button.value=="autenticar"){

                        if(idioma=="es-CO"){

                          swal({
                            html: "<i class='material-icons medium blue-text'>music_note</i> <h5><b>Graba tu huella vocal</b></h5> <br> Realiza tu grabación <br><br> Pulsa para grabar<br> Despues di: <b>Mi voz es mi contraseña</b>",
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
                                                beep.play();
                                                Grabar3(b);                            
                                              },5000)
                          })

                        }
                        else{

                          swal({
                            html: "<i class='material-icons medium blue-text'>music_note</i> <h5><b>Record your fingerprint vowel</b></h5> <br> Make your recording <br><br> Press to record<br> Then say: <b>Never forget tomorrow is a new day</b>",
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
                                  beep.play();
                                  Grabar3(b); 
                          })
                          
                        }  
                    }
                    else{
                    
                      if(idioma=="es-CO"){
            
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
                                              sound.play();
                                              
                                              setTimeout(function(){
                                                beep.play();
                                                Grabar3(b);  
                                              },5000)
            
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
                                                                      beep.play();                                                       
                                                                      Grabar3(b);                         
                                                                    },5000)
            
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
                                                                                            beep.play();
                                                                                            Grabar3(b);                            
                                                                                          },5000)
                                                                      })
                                                                    },10600);
                                                  
                                                })
                                              },10600);
                          })
            
                      }else{
            
                          swal({          
                            html: "<i class='material-icons medium blue-text'>filter_1</i> <h5><b>Record your fingerprint</b></h5> First recording <br><br> Press to record<br> Then say: <b>Never forget tomorrow is a new day</b>",
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
                                              beep.play();
                                              Grabar3(b);                                  
                                              setTimeout(function(){
                                                swal({
                                                  html: "<i class='material-icons medium blue-text'>filter_1</i> <h5><b>Record your fingerprint</b></h5> Second recording <br><br> Press to record<br> Then say: <b>Never forget tomorrow is a new day</b>",
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
                                                                    beep.play();
                                                                    Grabar3(b);                                                        
                                                                    setTimeout(function(){
                                                                    swal({
                                                                      html: "<i class='material-icons medium blue-text'>filter_1</i> <h5><b>Record your fingerprint</b></h5> Third recording <br><br> Press to record<br> Then say: <b>Never forget tomorrow is a new day</b>",
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
                                                                                        beep.play();
                                                                                        Grabar3(b);
                                                                                        
                                                                    })
                                                                  },5200);
                                                  
                                                })
                                              },5200);
            
            
            
                          })
                      }
                    
                    }
          }

        
        }
  </script>

  <script>//Funcion que ejecuta la accion de grabar en el javascript          
          function Grabar3(button){

            b=button;

            var id = button.value;
            if(id=="autenticar"){
                  var idioma = document.getElementById("selectorA").value;  
            }
            else{
                  var idioma = document.getElementById("selectorC").value;  
            }

            if(idioma=="es-CO"){
                    swal({
                    html: " <h5><b>Grabando</b></h5> <br> <button  class='btn btn-floating pulse waves-light red' type='button'><i class='material-icons left'>fiber_manual_record</i></button> <br><br> <b>Di: Mi voz es mi contraseña</b>  <br> La grabacion finalizara en 5 segundos!!",            
                    text: 'Se cerrará automáticamente en 5 segundos',
                    showConfirmButton: false,
                    timer: 5000,
                    allowOutsideClick: false,
                    onOpen: function () {

                      setTimeout(function(){
                        Grabar(b);},540);                     
                      
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- First, include the Webcam.js JavaScript Library -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.0/sweetalert2.js"></script>

  <script src="js/lib/recorder.js"></script>
  <script src="js/recordLive.js"></script>

  <script src="js/init.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script type="text/javascript">
     $(document).ready(function(){
      $('.scrollspy').scrollSpy();
    });

    $(document).ready(function() {
    $('select').material_select();
  });
  </script>

</body>

</html>



<?php
    require_once("VoiceIt.php");
    $myVoiceIt = new VoiceIt();
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

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
            echo "<script>swal({title: 'Correcto',text: 'Registro exitoso', type: 'success',confirmButtonText: 'Aceptar'});</script>";
        } else {
            $r = $text["Result"];
            echo "<script>swal({ title: 'Error!',  text: ".$r.",  type: 'error',  confirmButtonText: 'Aceptar'})</script>";
        }
     }

    if ($accion === "Eliminar usuario") {

        $email = $_POST["email"];
        $password = $_POST["password"];

        $response = $myVoiceIt->deleteUser("$email", "$password");

        $text = guardarJson($response);

        if ($text["Result"] == "Success") {
            echo "<script>swal({title: 'Correcto',text: 'Usuario eliminado correctamente', type: 'success',confirmButtonText: 'Aceptar'});</script>";
        } else {
            $r = $text["Result"];
            echo "<script>swal({ title: 'Error!',  text: '$r',  type: 'error',  confirmButtonText: 'Aceptar'})</script>";
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

        $encoded_data = $_POST['mydataA'];
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
             echo "<script>setTimeout(function(){
                
              swal({title: 'Correcto',text: 'Autenticacion exitosa con una confidencialidad del $r2 ', type: 'success',confirmButtonText: 'Aceptar'});

              },3500);

              </script>";

            
        } else {
            echo "<script>swal({ title: 'Error!',  text: '$r',  type: 'error',  confirmButtonText: 'Aceptar'})</script>";
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
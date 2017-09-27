
<?php

require_once("VoiceIt.php");
$myVoiceIt = new VoiceIt("ae6e25717c44451280823f8615ed454a");
$accion = $_POST["accion"];


//$response = $myVoiceIt->authentication("1234@122.com", "123456", "9.wav", "85", "es-CO");
if ($accion === "Crear usuario") {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $firsName = $_POST["firsName"];
    $lastName = $_POST["lastName"];
    $tel = $_POST["tel"];
    
    echo $email;
    echo $password;
    echo $firsName;
    echo $lastName;
    echo $tel;

    $response = $myVoiceIt->createUser($email, $password, $firsName, $lastName, $tel, "", "");
    
    $file = 'datos.json';

    file_put_contents($file, $response);

    echo "<a href='datos.json' target='_blank' >Usuario creado con exito</a>";
}

if ($accion === "Eliminar usuario") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $response = $myVoiceIt->deleteUser("$email", "$password");
    
    echo $response;
}



if ($accion === "Crear huella") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $file = $_POST["file"];
    $idioma = $_POST["idioma"];
    $response = $myVoiceIt->createEnrollment("$email", "$password", "$file", "$idioma");

    echo $response;
}

if ($accion === "autenticacion") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $file = $_POST["file"];
    $idioma = $_POST["idioma"];    
    $response = $myVoiceIt->authentication("$email", "$password", "$file", "85", "$idioma");

    echo $response;
}







//$response = $myVoiceIt->createUser($email, $password, $firsName, $lastName, $tel, "", "");
//$response = $myVoiceIt->authentication("developer@voiceit-tech.com", "d0CHipUXOk", "voicePrint5.wav", "85", "en-US");
//$response = $myVoiceIt->getUser("developer@voiceit-tech.com", "d0CHipUXOk");
//$response = $myVoiceIt->createUser("developer@voiceit-tech.com", "d0CHipUXOk", "John", "Doe", "530-956-7831", "", "");
//Get user $response = $myVoiceIt->getUser("developer@voiceit-tech.com", "d0CHipUXOk"); 
//Crear enrollment $response = $myVoiceIt->createEnrollment("developer@voiceit-tech.com", "d0CHipUXOk", "voicePrint.wav","en-US");
//$response = $myVoiceIt->deleteEnrollment("developer@voiceit-tech.com", "d0CHipUXOk", "1062904");
//Get enrollments $response = $myVoiceIt->getEnrollments("developer@voiceit-tech.com", "d0CHipUXOk");

$file = 'datos.json';

file_put_contents($file, $response);
?>

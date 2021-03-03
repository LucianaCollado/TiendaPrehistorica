<?php

$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

if(!isset($email)|| empty($email) ){
    include "header.php";
    echo '<div class="container"><strong style= color:red><h3>
    Error en el envío.</h3></strong>
    <strong><p>
    Agregue una dirección de correo e inténtelo nuevamente
    </p></strong>
    <a href="contacto.php"><button class="boton-compra">Volver a enviar</button></a><br>
    <br></div>';
    include "footer.php";
}elseif(!isset($mensaje)|| empty($mensaje)){
    include "header.php";
    echo '<div class="container">
    <strong style= color:red ><h3 >
    Error en el envío.</h3></strong>
    <strong><p>Agregue un mensaje e inténtelo nuevamente</p></strong>
    <a href="contacto.php"><button class="boton-compra">Volver a enviar</button></a><br>
    <br></div>';
    include "footer.php";
}
else{

        $contenido="$email\n$mensaje";
        $asunto="Consulta Tienda Prehistorica";
        $direccioncorreo= 'tiendaprehistorica@gmail.com';
        $mail= mail($direccioncorreo,$asunto,$contenido);
        
        $contenido2=" Hola!\n\n Tu consulta ha sido enviada correctamente y sera respondido a la brevedad.\n
        \nMientras tanto te invitamos a visitar nuestras redes\n
        http://www.facebook.com/TiendaPrehistorica\n
        http://www.instagram.com/TiendaPrehistoricaarg\n
        \nSaludos,
        \n Tienda Prehistorica";
        $mail= mail($email, $asunto,$contenido2);
        header('location:contacto.php');
        
      }
    
    

?>
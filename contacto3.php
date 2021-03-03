<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Prehistórica</title>
</head>
<body>
<?php
include "header.php"?>

<h2 id='contacto'>Contacto</h2>
<div id='contacto1' >

    <!-------- FORMULARIO ---------->
    <form action="enviar.php" method="post">
    <label for="email" id="email">
    Email*:
    <input type="email" placeholder='Escriba su email'id="email" name="email">

    </label>

    <label for="mensaje">
    <p>Mensaje*:</p>
    <textarea name="mensaje" id="mensaje" cols="30" rows="10"placeholder='Escriba su consulta' ></textarea>
    </label>
    <input type="submit" value="Enviar" id='botonenviar' name="botonenviar"class="boton-compra">
    <p>*Campos obligatorios</p>
     </form>
</div>
<div class="contacto-info" >
    <h3>También puedes escribirnos en:</h3>
    <ul>
        tiendaprehistorica@gmail.com
    </ul>
    <h3>O a nuestras redes sociales</h3>
    <div id=sprites>
     <a href="http://www.facebook.com/TiendaPrehistorica" target="_blank">
        
            <div class="sprite1">
                 <ul>
                    <li class="fb"></li>
                 </ul>
            
            </div>
        </a>
       
        <a href="http://www.instagram.com/tiendaprehistoricaarg" target="_blank">
        
            <div class="sprite2">
                <ul>
                      <li class="ing"></li>
                </ul>
            </div>
        </a>
</div>


</body>
<?php
include "footer.php"?>
</html>
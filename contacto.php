<?php
include "header.php"
?>
<div class="nosotros">
    <div class="nosotros-menu">
         <h2 id='contacto'>Contacto</h2>

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
    
</div>
<?php
include "footer.php"
?>
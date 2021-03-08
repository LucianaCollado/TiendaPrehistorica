<?php
include "header.php";

require_once "modelo/Producto.php";
$imagen = $_GET["imagen"];

$producto=new Productos();
$dato = Productos::traerProducto($imagen);
?>

<div class="tienda-producto">
    <div class="tienda-menu-producto">
    <h3><?php echo $dato['nombre']; ?></h3>
    <p><?php echo $dato['descripcion']; ?></p>
    <button class="boton-compra"><a href="https://mpago.la/13ipHtJ"> Compra Online </a></button>
    <button class="boton-compra"><a href="https://www.facebook.com/messages/t/2207500856139406"> Enviar mensaje</a></button>
    </div>
    <div class="productos-producto">
    <img src="<?php echo $dato['imagen']; ?>" alt="craneocarnotauro">
    </div>

<div>

<?php
include "footer.php"
?>
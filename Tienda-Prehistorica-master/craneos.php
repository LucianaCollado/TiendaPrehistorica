<?php
require_once "modelo/Craneos.php";
$row = Craneos::mostrarProducto();
?>

<div class="tienda">
<div class="tienda-menu">
<h3>Cráneos</h3>
<ul>

   <!-- <li><a href="#craneosclasicos">Cráneos clásicos</a></li>
    <li><a href="#craneosglow">Cráneos glow</a></li>-->
    
</ul>
</div>

<div class="productos">
    <div class="produtos-ppal">
        <div id="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="imagenes/galeria1.jpeg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                     <h5>CRANEOS</h5>
                     <p>texto</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="imagenes/galeria2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>TEXTO</h5>
            <p>texto</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="imagenes/galeria1.jpeg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>TEXTO</h5>
            <p>texto</p>
          </div>
            </div>
         </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
            </div>
     
    </div>
    <a name="craneosclasicos"></a>
    <div class="productos-sec">

    <?php
    foreach($row as $dato){
    ?>
        <div class="producto">
        
        <a href="producto.php?imagen=<?php echo $dato['imagen'] ; ?>">
        
        
        <img src="<?php echo $dato['imagen']; ?>" alt="craneocarnotauro"></a>
            <a href="producto.php"><h4><?php echo $dato['nombre']; ?></h4></a>
            <p><?php echo $dato['descripcion'];?></p>
            </div>
    <?php    }
    ?>
        
     </div>
     <!--<a name="craneosglow"></a>-->
    

</div>

</div>
</div>
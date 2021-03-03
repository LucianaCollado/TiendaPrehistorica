<?php include'header.php'; ?>


<!------------------MAIN--------------->
<main>

<!-----------------CAROUSEL------------>
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
            <h5>TEXTO</h5>
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
    
<!----------------Noticias------------------>
<div id="noticias">
    <div id="noticia1" class='noticia1'>
        <h2>Noticia 1</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non veniam excepturi nam. Labore debitis velit ducimus fugit dolores natus recusandae corrupti exercitationem dignissimos rem numquam explicabo possimus ab expedita esse, id consectetur omnis iure ut commodi quia! Officia rerum pariatur soluta repellat fuga veniam quae at aperiam aut? Amet corrupti obcaecati dignissimos pariatur sit provident totam facere doloribus? Ducimus molestias quos cupiditate iusto quisquam impedit praesentium quaerat, esse dicta rerum. Sunt at, voluptas libero corrupti illo nostrum itaque enim error quia deserunt expedita dignissimos unde repellendus fugiat aliquid ab laboriosam esse eius explicabo ad quasi beatae totam. Eos magnam commodi nam enim est, saepe molestias delectus molestiae excepturi. Odit ab provident numquam vel est? Nulla tenetur ab, itaque ad, sint placeat eius assumenda magni libero aliquam deleniti beatae, cumque veniam consequatur? Sint placeat et nisi perspiciatis quas officiis a fugiat quo unde totam ad perferendis laboriosam, similique quae magnam aut rerum consequatur autem esse modi asperiores. Reprehenderit quod suscipit temporibus voluptates expedita facere possimus aspernatur nulla harum repellendus itaque, fuga, aliquam odit sequi? Beatae esse doloribus eligendi itaque repellendus consequuntur minima distinctio. Praesentium impedit soluta porro autem veniam animi in blanditiis fuga unde, sunt ullam fugit natus sit tempore architecto, nisi repudiandae officiis.   </p>
        <img src="imagenes/galeria1.jpeg" alt="noticia1" id="imagennoticia">
    </div>

    <div id="noticia2" class='noticia2'>
      <h2>Noticia 2</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non veniam excepturi nam. Labore debitis velit ducimus fugit dolores natus recusandae corrupti exercitationem dignissimos rem numquam explicabo possimus ab expedita esse, id consectetur omnis iure ut commodi quia! Officia rerum pariatur soluta repellat fuga veniam quae at aperiam aut? Amet corrupti obcaecati dignissimos pariatur sit provident totam facere doloribus? Ducimus molestias quos cupiditate iusto quisquam impedit praesentium quaerat, esse dicta rerum. Sunt at, voluptas libero corrupti illo nostrum itaque enim error quia deserunt expedita dignissimos unde repellendus fugiat aliquid ab laboriosam esse eius explicabo ad quasi beatae totam. Eos magnam commodi nam enim est, saepe molestias delectus molestiae excepturi. Odit ab provident numquam vel est? Nulla tenetur ab, itaque ad, sint placeat eius assumenda magni libero aliquam deleniti beatae, cumque veniam consequatur? Sint placeat et nisi perspiciatis quas officiis a fugiat quo unde totam ad perferendis laboriosam, similique quae magnam aut rerum consequatur autem esse modi asperiores. Reprehenderit quod suscipit temporibus voluptates expedita facere possimus aspernatur nulla harum repellendus itaque, fuga, aliquam odit sequi? .</p>
        <img src="imagenes/galeria1.jpeg" alt="noticia1" id="imagennoticia">
    </div>
</div>
</main>





<a name="footer"></a>
<?php
include 'footer.php';
?>
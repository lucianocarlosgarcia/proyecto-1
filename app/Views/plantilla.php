<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--echo es una función PHP que se utiliza para mostrar texto enla página web.-->
  <!--$titulo es una variable php que va a tomar diferentes valores-->
   <title><?php echo($titulo);?></title>
    
    <!--Bootstrap-->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
      <script src="assets/js/bootstrap.bundle.min.js" ></script>
    <!-- mi hoja de estilos-->
     <link href="assets/css/estilo.css" type="text/CSS" rel="stylesheet" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 </head> 
 <body>  
 <!--barra de navegación-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
     <a class="navbar-brand" href="#">home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">        <li class="nav-item">
          <a class="nav-link "  href="#">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Comercialización</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- fin barra de navegación-->
<div class="header">
     <h1>WEBSITE CELULARES </h1>
</div>
<div class="container">    
    <P>Somos una empresa que se dedica a la venta de <b>relojes de mesa y pared </b>con 
diseños únicos e innovadores. Utilizamos materia prima de calidad. Elaboramos 
productos a la medida del cliente. </P>
<P class="p1">Ofrecemos productos únicos en este mercado, por su relación precio-calidad.</P>
</div>

<!-- Inicio carrousel-->
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/uno.jpg"  class="d-block w-100" alt="uno.jpg">
    </div>
    <div class="carousel-item">
<img src="assets/img/dos.jpg"  class="d-block w-100" alt="dos.jpg">
    </div>
    <div class="carousel-item">
    <img src="assets/img/tres.jpg"  class="d-block w-100"alt="tres.jpg">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!-- fin Carrousel-->    
<!-- inicio pie de página- footer-->
<footer class="mi-footer">
    <div class="footer-content">
        <span>© 2025 Mi Página Web. Todos los derechos reservados.</span>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</footer>
<!-- fin del footer-->  
</body> <!-- fin del body-->
</html> <!-- fin del html-->
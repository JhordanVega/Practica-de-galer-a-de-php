<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRANE VIEUX</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- ***************************** HEADER *************************** -->
  <header>
    <div class="col-xs-12 header_background">    
      <div class="col-xs-12 header_backgroundx2">
        <div class="container-fluid">
          <div class="col-xs-12 logo">
              
            <center>
              <img src="imagenes/logo.png" alt="">

              <div class="wpp_header hidden-xs">
                  <img src="imagenes/wasap.png" alt="">  <span>931 176 849</span>
              </div>
              
              <div class="wpp_header_2 visible-xs">
                  <center>
                  <img src="imagenes/wasap.png" alt="">  <span>931 176 849</span>
                  </center>
              </div>
            </center>

          </div>
        </div>
      </div>   
        
          <div class="navegacion container">

            <nav class="navbar col-md-9 col-xs-12 col-md-offset-0" role="navigation" id="slide-nav">
            <!-- <nav class="col-md-9 col-xs-12">   -->
                
                <div class="navbar-header">
                  <div class="collapse navbar-collapse col-xs-12" id="menu_header">  
                    <ul class="nav navbar-nav">     
                      <li ><a href="#">BIENVENIDA</a></li>
                      <li ><a href="#">NOSOTROS</a></li>
                      <li ><a class='active' href="#">CATÁLOGO <img src="imagenes/crane.png" alt=""></a></li>
                      <li ><a href="#">GALERÍA</a></li>
                      <li ><a href="contactenos.php">CONTÁCTENOS</a></li>
                    </ul>
                  </div>
                </div>

            </nav>

            <div class="col-md-3 sigue_md visible-lg visible-md">
            <!-- <div class="col-md-3">   -->
              <p class="redes_sociales">
                <span>SÍGUENOS EN </span>
                <a href="#"><img src="css/fb.jpg" alt=""></a>
                <a href="#"><img src="css/in.jpg" alt=""></a>
              </p>
            </div>

          </div>
          
        </div>
  </header>

<!-- ***************************** FIN HEADER **************************** -->

  <section class="fondo">
    
    <img src="imagenes/fondo.png" alt="">
  
  </section>


<!-- ******************************* GALERIA ********************************* -->

  <div class="galeria container">
    
    <?php foreach ($fotos as $foto): ?>
      <div class="col-md-3"></div>

      <div class="fotos col-md-4">
        <a href="#">
          <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
        </a>
        <a href="#">
          <center class="titulo"><strong><?php echo $foto['titulo']; ?></strong></center>
        </a>
        <a href="#">
          <center class="precio"><?php echo "S/. " . $foto['precio']; ?></center>
        </a>
      </div>

    <?php endforeach; ?>
   
  </div>


<!-- ***************************** FOOTER **************************** -->  

  <footer>
    <div class="col-xs-12 footer">
      <h1>INFORMACIÓN</h1>
      <div class="container">
        <div class="col-xs-12">
          <div class="col-md-3 col-sm-6 col-xs-12 foote_border foot_bor_sm">
            <p>
              JR. FRANCISCO DE ZELA 1009<br>
              JESÚS MARÍA - LIMA
            </p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 foote_border">
            <p>
              CENTRAL TELEFÓNICA: 759 9971<br>
              CEL.: 931 176 849
            </p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 foote_border foot_bor_sm">
            <p>
              consultas@cranevieux.pe<br>
              ventas@cranevieux.pe
            </p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <p>
                <img src="app/img/inicio/wpp2.png" alt=""> <span>931 176 849 </span><br>
                    SÍGUENOS EN <a target="_blank" href="http://www.facebook.com/comunidadcranevieux/"><img src="app/img/inicio/fb.jpg" alt=""></a>
                    
                    <!-- <a href="#"><img src="app/img/inicio/you.jpg" alt=""></a-->
                    <a href="https://www.instagram.com/polosperucranevieux/?hl=es" target="_blank"><img src="app/img/inicio/in.jpg" alt=""></a>
                  </p>
          </div>
        </div>
      </div>
    </div>

    <div class="hdc_link col-xs-12">
      <div class="container">
        <center>
          <a href="#"><small><strong>DESARROLLADO POR HDC</strong></small></a>
        </center>
      </div>
    </div>
  </footer>

<!-- ***************************** FIN FOOTER **************************** -->
  
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</body>
</html>
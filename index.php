<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ICS-Costa Rica</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script> -->
    <script src="js/vendor/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>

    <!-- Google Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/google-map-init.js"></script> -->


    <script src="js/main.js"></script>


  </head>
  <?php
		if (isset($_POST['submit'])) {
		
			$nombre = $_POST["name"];
			$email = $_POST["email"];
      $telefono = $_POST["cellphone"];
      $direccion = $_POST["address"];
			$mensaje = $_POST["comment"];

			$asunto ="Contacto desde la web";
			$destino = "info@icscostarica.com";


			$carta =  "De: $nombre \n";
			$carta .= "Correo: $email\n";
      $carta .= "Telefono: $telefono\n";
      $carta .= "Dirección: $direccion\n";
			$carta .= "Mensaje: $mensaje";


			$correo = mail($destino,$asunto,$carta);
			/*header("Location:index.php");*/

			echo '<div id="confirmacion">
					<div class ="wrapper-confirm">
						<img src="images/logo-copy.png"/>
						<p>Tu correo a sido enviado con éxito!!</p>
					</div>
					</div>
				'; 
		}
	?>
	<script type="text/javascript">
		$(document).ready(function() {
    		setTimeout(function() {
        		$("#confirmacion").fadeOut(1500);
    		},1000);
		});
</script>
  <body id="home" class="homepage">


    <!-- Header Start -->
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- header Nav Start -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="smooth-scroll navbar-brand" data-section="#home" href="#home" >
                  <img src="img/logo-copy.png" alt="Logo">
                </a>
              </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse main-menu" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home" data-section="#home">Inicio</a></li>
                    <li><a href="#service" data-section="#service">Productos</a></li>
                    <li><a href="#contact" data-section="#contact">Contacto</a></li>
                    <li class="facebook-icon">
                      <a href="https://www.facebook.com/ICScostarica2015/"></a>
                    </li>
                    <li class="linked-icon">
                      <a href="https://www.linkedin.com/in/juan-carlos-hernandez-8442561?trk=hp-identity-photo"></a>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->

      <div id="slider"> 
        <div class="slides">

          <!-- First slide --> 
          <div class="slider">
            <div class="legend-left"></div> 
            <div class="legend-right"></div> 
            <div class="image"> 
              <img src="img/slider/slider-1.jpg"> 
            </div>
            <div class="text-slider">
              <h3>Titulo</h3>
              <p>Pequeña descripción</p>
            </div>  
          </div> 

          <!-- Second slide --> 
          <div class="slider">
            <div class="legend-left"></div> 
            <div class="legend-right"></div>  
            <div class="image"> 
              <img src="img/slider/slider-2.jpg">
            </div>
            <div class="text-slider">
              <h3>Titulo</h3>
              <p>Pequeña descripción</p>
            </div>
          </div> 

          <!-- Third slide --> 
          <div class="slider">
            <div class="legend"></div> 
            <div class="legend-left"></div> 
            <div class="legend-right"></div> 
            <div class="image"> 
              <img src="img/slider/slider-3.jpg"> 
            </div>
            <div class="text-slider">
              <h3>Titulo</h3>
              <p>Pequeña descripción</p>
            </div>
          </div>
          <div class="slider">
            <div class="legend-left"></div> 
            <div class="legend-right"></div>
            <div class="image">
              <img src="img/slider/slider-4.jpg">
            </div>
            <div class="text-slider">
              <h3>Titulo</h3>
              <p>Pequeña descripción</p>
            </div>
          </div> 
        </div> 
        <div class="switch">
          <ul>
            <li>
              <div class="on"></div>
            </li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
      <section class="clients">
        <div class="container-fluid">
          <div class="row text-center">
            <div class="col-md-4">
              <div class="wrapper-img">
                <img src="img/logo-melform.png" alt="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="titulo-clients">
                <h1>
                  Representantes Exclusivos
                </h1>
              </div>
            </div>
            <div class="col-md-4">
              <div class="wrapper-img dj-productos-wrapper">
                <img src="img/logo-dj.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>

  <!--   </section> -->
    <!-- Wrapper Start -->
    <section id="intro">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>Nosotros</h2>
                <p>Contamos con 25 años de experiencia en el negocio logístico intermodal internacional. Amplia experiencia en aspectos técnicos de contenedores refrigerados y secos. Expertos en transportes de productos secos y refrigerados tanto perecederos como congelados, soluciones logísticas, ahorros de costos operativos, venta y renta de equipo intermodal.</p>
                <h2>Misión</h2>
                <p>ICS International Commerce and Service S.A. será una empresa de apoyo al sector logístico intemodal y de distribución de productos refrigerados, suministrado opciones y soluciones que ayuden a disminuir los costos operativos y logísticos de nuestros cliente.</p>
              </div>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block mt-5">
              <img src="img/animationNosotros.gif" alt="Img">
            </div>
          </div><!-- .col-md-5 close -->
        
        </div>
      </div>
    </section>

  <section id="feature">
    <div class="overlay-black"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div>
            <h2>Perfil de la Compañía</h2>
            <p>Contamos con más de 25 años de experiencia en operaciones logísticas, mantenimiento de equipo intermodal como contenedores, chasis, genset, equipo pesado y otros. Además, análisis operativo y financiero de procesos logísticos.</p>
            <p>
              Amplio conocimiento de criterios técnicos de reparaciones IICL, materiales para reparación de contenedores, gerenciamiento de departamentos de Mantenimiento y Reparaciones.
            </p>
            <p>
              Especialidad en transporte de productos refrigerados y congelados en contenedores, furgones y equipos similares.
            </p>
            <p>
              Juan Carlos Hernández, Ingeniero Mecánico, cuenta con amplia experiencia en áreas técnicas, operativas y logísiticas luego de trabajar más de 20 años en puestos regionales en empresas como DOLE, Del Monte y CHIQUITA Brands.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
        
    <!-- Service Start -->
    <section id="service">
      <div class="container-fluid">
        <div class="row">
          <div class="section-title">
            <h2>Productos</h2>
          </div>
          <div class="col-sm-6 col-md-4 special-hover">
            <div class="service-item" id="farmaceutica">
              <a href="productos.php">
                <div class="content">
                  <div class="title-products">
                    <h1>Biomédica y 
                      <br>
                      farmaceutica
                    </h1>
                  </div>
                  <div class="content-overlay"></div>
                  <img class="content-image" src="img/productos/cajas-1.jpg">
                  <div class="content-details fadeIn-bottom">
                    <h2>Biomédica y
                      <br>
                      farmaceutica
                    </h2>
                     <p>
                      Logística biomédica
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 special-hover">
            <div class="service-item" id="cajas-isotermicas">
              <a href="productos.php">
                <div class="content">
                  <div class="title-products">
                    <h1>Cajas 
                      <br>
                      Isotérmicas
                    </h1>
                  </div>
                  <div class="content-overlay"></div>
                  <img class="content-image" src="img/productos/cajas-4.jpg">
                  <div class="content-details fadeIn-bottom">
                    <h2>Cajas
                      <br>
                      Isotérmicas
                    </h2>
                    <p>
                      Logística alimentaria
                    </p>
                  </div>
                  <div class="overlay-black"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 special-hover">
            <div class="service-item" id="Restaurantes">
              <a href="productos.php">
                <div class="content">
                  <div class="title-products">
                    <h1>Restaurantes hoteles 
                      <br>
                      catering service
                    </h1>
                  </div>
                  <div class="content-overlay"></div>
                  <img class="content-image" src="img/productos/cajas-5.jpg">
                  <div class="content-details fadeIn-bottom">
                    <h2>Restaurantes hoteles
                      <br>
                      catering service
                    </h2>
                    <p>
                      Temperatura y transporte
                    </p>
                  </div>
                  <div class="overlay-black"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 special-hover">
            <div class="service-item" id="remolcadores">
              <a href="productos.php">
                <div class="content">
                  <div class="title-products">
                    <h1>Remolcadores 
                      <br>
                      Eléctricos
                    </h1>
                  </div>
                  <div class="content-overlay"></div>
                  <img class="content-image" src="img/productos/cajas-6.jpg">
                  <div class="content-details fadeIn-bottom">
                    <h2>Remolcadores
                      <br>
                      Eléctricos
                    </h2>
                    <p>
                      Movilización de equipos
                    </p>
                  </div>
                  <div class="overlay-black"></div>
                </div>
              </a>
            </div>
          </div>
           <div class="col-sm-6 col-md-4 special-hover">
            <div class="service-item" id="contenedores">
              <a href="productos.php">
                <div class="content">
                  <div class="title-products">
                    <h1>Contenedores
                    </h1>
                  </div>
                  <div class="content-overlay"></div>
                  <img class="content-image" src="img/productos/cajas-2.jpg">
                  <div class="content-details fadeIn-bottom">
                    <h2>Contenedores
                    </h2>
                    <p>
                      Venta y modificación secos y refrigerados
                    </p>
                  </div>
                  <div class="overlay-black"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 special-hover">
            <div class="service-item" id="suministros">
              <a href="productos.php">
                <div class="content">
                  <div class="title-products">
                    <h1>Partes y
                      <br>
                        Suministros
                    </h1>
                  </div>
                  <div class="content-overlay"></div>
                  <img class="content-image" src="img/productos/cajas-3.jpg">
                  <div class="content-details fadeIn-bottom">
                    <h2>Partes y
                      <br>
                        Suministros
                    </h2>
                    <p>
                      Para reparación de contenedores secos y refrigerados
                    </p>
                  </div>
                  <div class="overlay-black"></div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="container-fluid  text-center">
        <div class="row">
          <div class="section-title">
            <h2>Contacto</h2>
          </div>
          <div class="col-md-12">
            <div id="contact_form" class="text-left">
            <form  form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" id="formulario">
                <fieldset>
                  <div class="form-input" >
                    <label for="name" >Nombre：</label>
                    <input type="text" name="name" id="name" placeholder="Pedro"  id="name" required/ >
                   <!--  <span class="form-input-required">*</span> -->
                    <!-- <span class="form-input-validation"></span> -->
                  </div>
                  <div>
                    <label for="email" >E-mail：</label>
                    <input type="email" name="email" id="email" placeholder="usuario@usuario.com" required/>
                    <!-- <span class="form-input-required">&nbsp</span> -->
                    <!-- <span class="form-input-validation"></span> -->
                  </div>
                  <div>
                    <label for="cellphone" >Teléfono：</label>
                    <input type="tel" name="cellphone" id="cellphone" placeholder="8888-88-88"  required />
                    <!-- <span class="form-input-required">*</span> -->
                    <!-- <span class="form-input-validation"></span> -->
                  </div>
                  <div>
                    <label for="addres" >Dirección：</label>
                    <input type="text" name="address" id="address" placeholder="San José"  required />
                    <!-- <span class="form-input-required">*</span> -->
                    <!-- <span class="form-input-validation"></span> -->
                  </div>
                  <div>
                    <label for="comment">Mensaje：</label>
                    <textarea cols="40" rows="10" name="comment" id="comment" class="required" required></textarea>
                  </div>
                  <div>
                    <input type="submit" value="ENVIAR" class="submit" name="submit">
                  </div>
                </fieldset>
              </form>
              <div id="mostrardatos"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
            <div class="border-right-white">
              <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección</h2>
              <p>
                Escazú, San José,Costa Rica.
              </p>
            </div>
          </div>
          <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
            <div class="border-right-white">
              <h2><i class="fa fa-envelope" aria-hidden="true"></i> Correo</h2>
              <p>
                <a class="auto-generated-link" data-auto-recognition="true" data-content="info@icscostarica.com" href="mailto:info@icscostarica.com" data-type="mail">info@icscostarica.com</a>
                </br>
                <a class="auto-generated-link" data-auto-recognition="true" data-content="jchernandez@icscostarica.com" href="mailto:jchernandez@icscostarica.com" data-type="mail">jchernandez@icscostarica.com</a>
              </p>
            </div>
          </div>
          <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
            <div class="border-right-white">
              <h2><i class="fa fa-phone" aria-hidden="true"></i> Teléfono</h2>
              <p>
                +506 2215 0147
                </br>
                +506 8442 4224
              </p>
            </div>
          </div>
          <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
            <div class="">
              <h2><i class="fa fa-share-square-o" aria-hidden="true"></i> Siguenos</h2>
              <p class="social-network">
                <a href="https://www.facebook.com/ICScostarica2015/">
                  <img src="img/facebook.png" alt="">
                </a>
                <a href="https://www.linkedin.com/in/juan-carlos-hernandez-8442561?trk=hp-identity-photo">
                  <img src="img/linkedin.png" alt="">
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <section class="copyright">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <p class="text-center">2016. Copyright ICS S.A. Costa Rica</p>
          </div>
        </div>
      </div>  
    </section>
    <a href="#" class="go-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
            
<!--   <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script> -->
            
    
    </body>
</html>
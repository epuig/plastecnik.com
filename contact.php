<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contactar con PLASTECNICK - Inyecci&oacute;n de pl&aacute;sticos</title>

	<style>
      #map-container { height: 300px }
	  
    .google-maps {
        position: relative;
        //padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
		height: 300px; // height: 100% !important;
    }
    </style>
	
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
          <a class="navbar-brand" href="index.html">PLASTECNICK</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="about.html">Empresa</a></li>
            <li><a href="services.html">Servicios</a></li>
            <li class="active"><a href="contact.php">Contactar</a></li>
            
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contactar<small> - Estaremos encantados de saber de ti.</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li class="active">Contactar</li>
          </ol>
        </div>
        
		<div class="col-lg-12">
			<div class="google-maps" id="map-container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3777.864465963256!2d-0.5181265989088812!3d39.17069952839211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61a7edd8614a17%3A0xa2a707d732c8eed4!2sHijos+de+Joaqu%C3%ADn+Domenech+S.+L.!5e1!3m2!1ses!2sus!4v1543923153758" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3> Contacta con nosotros!</h3>
          <p>&iexcl;Bienvenido/a! <br>
			 &iquest;Quieres preguntarnos algo?  En PLASTECNICK, &iexcl;te lo ponemos f&aacute;cil!. <br>
			 Si quieres ponerte en contacto con nosotros, si deseas realizar alguna consulta, pedir un presupuesto o necesitas m&aacute;s informaci&oacute;n sobre cualquiera de nuestros servicios, d&eacute;janos tus datos en el siguiente formulario y te responderemos lo antes posible.<br>
			 Gracias por tu inter&eacute;s en PLASTECNICK.</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Nombre</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Direcci&oacute;n de correo electr&oacute;nico</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Tel&eacute;fono</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Mensaje para PLASTECNICK</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Enviar</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
			<h3>PLASTECNICK <br> Inyecci&oacute;n de pl&aacute;sticos</h3>
			<h4>Hijos de Joaquin Dom&oacute;nech, S.L.</h4>
			<p>Camino Garroferas, s/n <br>
			   46250 , L'ALCUDIA<br>
			   VALENCIA<br>
			   Espa&ntilde;a<br>
			</p>
			<p><i class="fa fa-phone"></i> T&eacute;l.: (+34) 96 244 33 04</p>
			<p><i class="fa fa-fax"></i> Fax: (+34) 96 244 34 56</p>
			<p><i class="fa fa-envelope-o"></i> E-mail: <a href="mailto:comercial@plastecnik.com">comercial@plastecnik.com</a></p>
			<br>
			<p><i class="fa fa-clock-o"></i> Horario: Lunes a Viernes: 9:00 a 14:00</p>
			<br>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="http://www.facebook.com/plastecnik.domenech" data-toggle="tooltip" data-placement="top" title="Facebook" target="_Blank"><i class="fa fa-facebook-square fa-4x"></i></a></li>
<!--             <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li> 
-->
          </ul>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; PLASTECNICK 2013. <small> Dise&ntilde;o web por JEPS</small></p>
                </div>
            </div>
        </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

  </body>
</html>

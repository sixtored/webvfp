<?php require("include/session.php"); ?>
<?php require("include/functions.php"); ?>
<?php if(logged_in()) redirect_to("main.php") ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0">
	<title> SixtoRed </title>
    <link rel="stylesheet" type="text/css" href="css/estilos_pantalla.css">
    <link rel="stylesheet" type="text/css" href="css/disposicion_grande_pantallas.css">
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)" href="css/disposicion_pequena_pantallas.css">
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:800px)" href="css/disposicion_mediana_pantallas.css">
    <!-- font awesome -->
     <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

  <link href = "https://fonts.googleapis.com/css?family= Do + Hyeon " rel = "hoja de estilo">


	<!--[if lt IE 9]>
		<script src= "http://html5shiv.googlecode.com/sun/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<div class="pagina">
		<header> 
			<a href="#" class="logo" ></a>
			</header><!-- /header -->
			<article>
				<h1> Acerca de &copy; SixtoRed.
			</h1>
				
					<p>
					 Somos una empresa que inicia sus actividades en 2009, con el aporte y la experiencia individual.
           Basados en sólida base profesional, y respaldados por sistemas desarrollados de características innovadoras, tecnologías de punta, consistentes con las necesidades de clientes exigentes y ávidos de sistemas que acompañen el desarrollo de sus necesidades. </br>
         Estamos comprometidos con el mejoramiento de la calidad de nuestros productos y servicios.</br>
         Nuestros clientes son los destinatarios de estos esfuerzos, y su satisfacción es la fuerza que nos impulsa.
 
			</p>
				</article>
       <img class="centrado" src="imagenes/logo.png" alt="index.php">
        
             <nav> 
             	<a href="index.php">Home</a>
		 	    <a href="acercade.php">Acerca de</a>
            	<a href="productos.php">Productos</a>
          
           
           
          		<a target="_blank" href="https://api.whatsapp.com/send?phone=+5493843461578&text=Hola"><i class="fa fa-whatsapp" aria-hidden="true"></i> Contacto </a>
           
            	<a href="ingresar.php">Ingresar</a>

       </nav>
            

		
<footer>
			&copy; SixtoRed, servicios informaticos.<br>
  <i class="fa fa-envelope-o" aria-hidden="true"></i> sixtod@gmail.com
<div class="rating">

			
		</footer> 
	
		
	</div>
</body>
</html>
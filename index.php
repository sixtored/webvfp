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
   
   <link rel="stylesheet" type="text/css" href="fonts/Aarvark Cafe.ttf">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <!-- font awesome -->
     <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
     <style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans');
</style>
 
	<!--[if lt IE 9]>
		<script src= "http://html5shiv.googlecode.com/sun/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<div class="pagina">
		<header> 
			<a href="#" class="logo" ></a>
			</header><!-- /header -->
<div class="logouno">
  <article>
    
       
				<h1> Software de gestión </br> 
          y</br> 
           facturación electrónica
			</h1>
            <br>
                <?php 
					echo "<i>".session_msg()."</i>";
				?>
     
				<h2>
					 Con implementación de factura electronica, tu empresa mejorará la productividad, ganará en eficiencia y reducirá notablemente los costos.
			</h2>
				</article> 

          
        </div>

             <div class="promo_contenedor">
               <div class="promo.uno">
            	<div class="contenido">

            		<span class="fa-stack fa-4x">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-handshake-o fa-stack-1x"></i>
</span>
                	<h3>Experiencia</h3>
                    <p>
Mas de 10 años trabajando en el desarrollo de software.
					</p>
                    
                </div>
            </div>

	<div class="promo.dos">            
            <div class="contenido">

            	<span class="fa-stack fa-4x">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-wrench fa-stack-1x"></i>
</span>
                	<h3>Soporte tecnico</h3>
                    <p>
A veces pueden surgir inconvenientes o dudas en su entorno de trabajo, problemas de red, cambios de equipamiento, cortes de energía eléctrica u otros. Por esto  garantizamos que su software va a estar siempre funcionando y libre de cualquier inconveniente. 
					</p>
                    <p><a href="#"></a>
                </div>
            </div>
            
            <div class="promo.tres">
            <div class="contenido">


            	<span class="fa-stack fa-4x">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-laptop fa-stack-1x"></i>
</span>
                	<h3>Seguimiento y actualizaciones </h3>
                    <p>
Tenga en cuenta que el software es una industria que cambia constantemente. Cambian los sistemas operativos, cambia el hardware, surgen nuevas tecnologías o simplemente cambia la legislación o la forma de trabajo. Es por esto que usted necesita tener siempre un software actualizado.
            </p>
					 
                    <p><a href="#"></a> </p>
                </div>
               </div>
        	<div class="clear-fix"></div>
        </div>
        <div>
        <img class="centrado" src="imagenes/logo.png" alt="index.html">
        
        </div>

             <nav> 
             <a href="index.php">Home</a>
		 	<a href="acercade.php">Acerca de</a>
            <a href="productos.php">Productos</a>
            
           
           <a target="_blank" href="https://api.whatsapp.com/send?phone=+5493843461578&text=Hola"><i class="fa fa-whatsapp" aria-hidden="true"></i> Contacto</a>
           
           <a href="ingresar.php">Ingresar</a>
           <a href="fiscal.php">Fiscal</a>

       </nav> 
		
<footer>
	 &copy; SixtoRed, servicios informaticos. <br>
  <i class="fa fa-envelope-o" aria-hidden="true"></i> sixtod@gmail.com
<div class="rating">

			
</footer> 
	
		
</div>
  <script src="codigo.js"></script>
</body>
</html>
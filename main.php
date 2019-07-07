<?php require("include/session.php"); ?>
<?php verify_session(); ?>
<?php require("include/functions.php"); ?>

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

<strong>Bienvenido, <?php echo $_SESSION["username"]; ?></strong>.
<b><a href="logout.php">Desconectar</a></b>
</article>
  <img class="centrado" src="imagenes/logo.png" alt="index.php">
        
 <nav> 
             <a href="index.php">Home</a>
		 	<a href="acercade.php">Acerca de</a>
            <a href="productos.php">Productos</a>
            

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
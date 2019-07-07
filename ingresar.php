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
				<h1> Ingreso de usuario
				</h1>
                <br>
                <?php 
					echo "<i>".session_msg()."</i>";
				?>
				
					<p>
					<form action="login.php" method="post">
					<table>
						<tr><td>Usuario: </td><td><input type="text" name="username" id="username" placeholder="usuario" size="30" maxlength="15" autofocus required\></td></tr>
    					<tr><td>Contraseña: </td><td><input type="password" name="password" size="30" maxlength="50"\></td></tr>
   						 <tr><td></td><td><input type="submit" name="submit" value="Ingresar"></td></tr>
					</table>
					</form>
                    <a href="register.php">Regístrate aquí</a>
 
					</p>
       </article>             
       <img class="centrado" src="imagenes/logo.png" alt="index.php">
        
 <nav> 
             <a href="index.php">Home</a>
		 	<a href="acercade.php">Acerca de</a>
            <a href="productos.php">Productos</a>
            
           
           <a target="_blank" href="https://api.whatsapp.com/send?phone=+5493843461578&text=Hola"><i class="fa fa-whatsapp" aria-hidden="true"></i> Contacto</a>
           
           <a href="ingresar.php">Ingresar</a>

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
     
            


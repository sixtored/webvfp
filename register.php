<?php require("include/session.php"); ?>
<?php require("include/functions.php"); ?>
<?php include("include/database.php"); ?>
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
				<h1> Registrate
				</h1>
                <br>
<?php

	if(isset($_POST["submit"]))
	{
		$name = strip_tags($_POST["name"]);
		$username = strip_tags($_POST["username"]);
		$password = strip_tags($_POST["password"]);
		$confirm_password = strip_tags($_POST["confirm_password"]);
		$email = $_POST["email"] ;
		$celular = strip_tags($_POST["celular"]);
		
		if(empty($name) || empty($username) || empty($password) || empty($confirm_password) || empty($email) || empty($celular) )
		{
			echo "Debes de rellenar todos los campos.";
		}
		else
		{
			$error = "";
			if(strlen($name)<=6 || strlen($name)>=100)
			{
				$error .= "El número de caracteres del nombre debe ser mayor a 6 y menor a 100<br>";
			}
			if(strlen($username)<=6 || strlen($username)>=15)
			{
				$error .= "El número de caracteres del nombre de usuario debe ser mayor a 6 y menor a 15<br>";
			}
			if(strlen($password)<=6 || strlen($password)>=15)
			{
				$error .= "El número de caracteres de la contraseña debe ser mayor a 6 y menor a 15<br>";
			}
			if($password != $confirm_password)
			{
				$error .= "Las contraseñas no coinciden<br>";
			}
			if(empty($email))
			{
				$error .= "Debe ingresar un email<br>";
			}
			if(empty($celular))
			{
				$error .= "Debe ingresar un celular<br>";
			}
			
			$query = "SELECT * FROM user WHERE username='".$username."' LIMIT 1";
		
			$result = mysql_query($query);
		
			if(mysql_num_rows($result) == 1)
			{
			$error .= "El usuario que Ingreso ya existe..<br>"	;
			}
			
			$query = "SELECT * FROM user WHERE email='".$email."' LIMIT 1";
		
			$result = mysql_query($query);
		
			if(mysql_num_rows($result) == 1)
			{
			$error .= "El email que Ingreso ya existe..<br>"	;
			}
			
			if(md5($_POST["captcha"]) == $_SESSION["captcha"])
			{
				
			}
			else
			{
			$error .= "El codigo de verificacion es incorrecto..<br>"	;
			}
			
			if(empty($error))
			{
				$date = date("Y-m-d");
				$password = md5($password);
				
				$query = "INSERT INTO user VALUES('','$username','$password','$name','$date','$email','$celular')";
				
				mysql_query($query);
				
				if(mysql_affected_rows() == 1)
				{
					echo "Te has registrado correctamente. <a href=\"ingresar.php\">Hacer click aquí para ir a la página de logueo</a>";
				}
				
			}
			else
			{
				echo "Estos son los siguientes errores:<br>$error";
			}
		}		
	}
	else
	{
		$name = "";
		$username = "";
	}

?>
<form action="register.php" method="post" oninput="range_control_value.value = range_control.valueAsNumber">
<table>
	<tr><td>Nombre completo: </td><td><input type="text" name="name" value="<?php echo $name; ?>"id="nombre" size="40" maxlength="100" autofocus required\></td></tr>
	<tr><td>Usuario: </td><td><input type="text" name="username" value="<?php echo $username; ?>"id="username" size="30" maxlength="15" required\></td></tr>
    <tr><td>Contraseña: </td><td><input type="password" name="password" size="30" maxlength="50"\></td></tr>
    <tr><td>Confirmar Contraseña: </td><td><input type="password" name="confirm_password" size="30" maxlength="50"\></td></tr>
    <tr><td>Email: </td><td><input type="email" name="email" value="<?php echo $email; ?>"id="email" size="30" maxlength="50" required\></td></tr>
    <tr><td>Celular: </td><td><input type="text" name="celular" value="<?php echo $celular; ?>"id="celular" size="30" maxlength="20" required\></td></tr>
    <tr><td></td><td><img src="captcha.php"/><button>Actualizar</button><br><input type="text" name="captcha"></td></tr>
    <tr><td></td><td><input type="submit" name="submit" value="Registrar"></td></tr>
</table>
</form>

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
     
            


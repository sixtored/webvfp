<?php require("include/session.php"); ?>
<?php require("include/functions.php"); ?>
<?php include("include/database.php"); ?>
<?php

if (isset($_POST["submit"]))
   {
		$username = isset($_POST["username"])?$_POST["username"]:"";
		$password = isset($_POST["password"])?$_POST["password"]:"";	
	
		if(empty($username) || empty($password))
		{
			session_msg("Todos los campos son necesarios.");
			redirect_to("ingresar.php");
		}
						
		$query = "SELECT * FROM user WHERE username='".$username."' LIMIT 1";
		
		$result = mysql_query($query);
		
		if(mysql_num_rows($result) == 1)
		{
			$user = mysql_fetch_assoc($result);
			
			if($user["password"] == md5($password))
			{
				$_SESSION["username"] = $username;
				$_SESSION["userid"] = $user["id"];
				session_msg("Ha iniciado sesión.");
				redirect_to("main.php");
			}
			else
			{
				session_msg("Password Incorrecto.");
				redirect_to("ingresar.php");
			}
			
		}
		else
		{
			session_msg("Nombre de usuario inexistente.");
			redirect_to("ingresar.php");
		}
	}
	else
	{
		redirect_to("ingresar.php");
	}
	
	
?>
<?php

	session_start();

	#Recupera o almacena un mensaje de sesión
	function session_msg($msg="")
	{
		if(empty($msg))
		{
			if(isset($_SESSION["message"]))
			{
				$msg = $_SESSION["message"];
				$_SESSION["message"] = "";
				return $msg;
			}
			else
			{
				return "";
			}
		}
		else
		{
			$_SESSION["message"] = $msg;
		}
	}
	
	#verificar la sesión
	function verify_session()
	{
		if(!logged_in())
		{
			session_msg("Debes iniciar sesión para ingresar.");
			header("Location:index.php");
			exit();
		}
	}
	
	#indica si el usuario a iniciado sesión
	function logged_in()
	{
		return isset($_SESSION["userid"]);
	}

?>
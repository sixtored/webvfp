<?php require("include/session.php"); ?>
<?php require("include/functions.php"); ?>
<?php

	$_SESSION = array();
	session_destroy();
	session_start();
	session_msg("Se ha cerrado la sesión");
	redirect_to("ingresar.php");

?>
<?php
	session_start();
	
	unset($_SESSION['aid']);
	
	session_destroy();
	
	die(header("Location:homepage.php"));
?>
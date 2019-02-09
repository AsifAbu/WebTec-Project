<?php
	
	session_start();
	session_destroy();
	setcookie("rm", "", time() - 3600,"/");
	header("location: login.php");
	
?>
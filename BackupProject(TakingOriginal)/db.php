<?php

	function DBconnection(){
		$conn= mysqli_connect('localhost', 'root', '', 'webtech');

		return $conn;
	}
	

?>
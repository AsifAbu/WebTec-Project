<?php
	require "db.php";
	session_start();
	include "header.php";
		
	if(isset($_GET['id']))
	{
		$username = $_GET['id'];
		if($_SESSION['abc']=='123')
		{
			$conn = DBconnection();
			$sql= "delete from admin where username='".$username."'";
			$result = mysqli_query($conn, $sql);
			header("location: viewuserlist.php?status=successfully_deleted".$username);
		}
		else
		{
			header("location: viewuserlist.php?status=not_deleted".$username);

		}
	}
	include "footer.php";
?>	
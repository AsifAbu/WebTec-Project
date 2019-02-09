<?php
	require "db.php";
	session_start();
	include "header.php";
	$category = $_GET['id'];
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$category = $_GET['category'];
		if($_SESSION['abc']=='123')
		{
			$conn = DBconnection();
			$sql = "delete from ".$category." where id='".$id."'";
			$result = mysqli_query($conn, $sql);
			?>
			<script>
				alert("this is alart box ok???");
				</script>
			<?php
			header("location: viewproduct.php?status=successful".$id);
		}
		else
		{
			header("location: viewproduct.php?status=unsuccessful".$id);

		}
	}
	include "footer.php";
?>
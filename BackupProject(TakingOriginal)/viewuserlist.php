<!DOCTYPE html>
			<html>
			<head>
				<title>UserList</title>
			</head>
			<body onload="loadData()">
<?php
	require "db.php";
	session_start();
	include "header.php";
	echo "</br>";
	$dd=$_GET['status'];
	if($_SESSION['abc']=='123')
	{
		if($dd == 'SomeValueIsNULL')
		{
?>
		    <script>
	            alert("Text Field Can't Be Null");
	            header("location: viewuserlist.php");
	        </script>
<?php
		}
		else if($dd != 'SomeValueIsNULL')
		{
?>
			
				<center>
					<div>
						<input type="text" id='search' name="searchtext" placeholder="Name" value="" onkeyup="loadData()" >
						<input type="button"  name="" value="Search" >
					</div>
					<div id="result">
					</div>
				</center>
				<script type="text/javascript">
					
					function loadData(){

						var xmlHttp = new XMLHttpRequest();

						xmlHttp.open('POST', 'search.php', true);
						xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						var abc = "key="+document.getElementById('search').value;
						xmlHttp.send(abc);

						xmlHttp.onreadystatechange = function(){

							if(this.readyState == 4 && this.status==200)
							{
								var data = "<div>"+this.responseText+"</div>";
								document.getElementById('result').innerHTML = data;
							}
						}
					}
				</script>
			</body>
			</html>
<?php
		}
		else
		{
			header("location: home.php");
		}
		echo "</br>";
		echo "<h4 align='center'><a href='home.php'>
		    	<input type='button' name='back' value='Back'>
		      </a><h4/>";
		include "footer.php";
		$conn->close();
	}
?>

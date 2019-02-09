<?php
	if(!isset($_COOKIE['rm']))
	{
		include "header.php";
		if(isset($_GET['status']))
		{
			$status = $_GET['status'];

			if($status == "invaliduser")
			{
				echo '<i style="color:red;font-size:30px;font-family:calibri ;">Invalid user info! try again... </i> ';
			}
			else if($status == "nullvalue")
			{
				echo "Username/password can't be empty";
			}
		}

?>
		<!DOCTYPE html>
		<html>
		<head>
		<title>LOGIN</title>
		</head>
		<body>
				<form method="post" action="logCheck.php">

					<table border="0" align='center' width=40%></br></br></br></br></br></br>
					<tr>
						<td width=30%><i style="color:black;font-size:20px;">User Name:</i></td>
						<td width= 30%><input size=30% type="text" placeholder="Enter Name" name="username" id="name" onkeyup="nameCheck()" required></td>
						<td id="namep"></td>
					</tr>
					<tr>
						<td width=30%><i style="color:black;font-size:20px;">Password : </i></td>
						<td width=30%><input size=30% type="password" placeholder="Enter Password" name="password" id="password" onkeyup="passwordCheck()" required></td>
						<td id="passwordp"></td>
					</tr>

					<tr>
						<td width=30%></td>
						<td><input type="checkbox" name="rememberme" value="checked">Remember Me</td>
					</tr>
					<tr>
						<td width=30%></td>
						<td align='right'><input type="submit" name="submit" value="Sign In" style=" height: 30px; width:50%;"></td>
					</tr>
				</form>
			<script>
				function nameCheck()
				{
					var name = document.getElementById("name").value;
					if(name == "")
					{
						document.getElementById("namep").innerHTML = "Name Not Be Empty!!";
						document.getElementById("namep").style.color = 'red';
					
					}
					else
					{
						document.getElementById("namep").innerHTML = "";
					}
				}
				function passwordCheck()
				{
					var password = document.getElementById("password").value;
					if(password == "")
					{
						document.getElementById("passwordp").innerHTML = "Password Not Be Empty!!";
						document.getElementById("passwordp").style.color = 'red';
					}
					else
					{
						document.getElementById("passwordp").innerHTML = "";
					}
				}
			</script>


		</body>
		</html>
<?php
	}
	else
	{
		$_SESSION['abc'] = "123";
		$_SESSION['username'] = $username;
		header("location: home.php");
	}
	include "footer.php";
?>



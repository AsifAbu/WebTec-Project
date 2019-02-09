
<?php
	require "db.php";
	session_start();

	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$rm=$_POST['rememberme'];
		
		if($username == "" || $password == "")
		{
			header("location: login.php?status=nullvalue");
		}
		else
		{
			$conn = DBconnection();
            if(!$conn)
            {
                echo "DB Error: ".mysqli_connect_error();
            }
            else
            {
				$sql = "SELECT * from admin where username='".$username."'";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result))
				{
					$dusername = $row['username'];
					$dpassword = $row['password'];
					$dconfirmpassword = $row['confirmpassword'];
					$dgender = $row['gender'];
					$dphonenumber = $row['phonenumber'];
					$dgmail = $row['gmail'];
					$dnidnumber = $row['nidnumber'];
	            }

            }


			$isvalid = "";
			if($username == $dusername && $password == $dpassword)
			{
					$isvalid = "validuser";
			}

			if($isvalid == "validuser"){

				$_SESSION['abc'] = "123";
				if($rm=="checked")
				{
					setcookie("rm", "123", time() + (86400 * 30), "/");
				}
				$_SESSION['username'] = $username;
				header("location: home.php");
			}else{
				header("location: login.php?status=invaliduser");
			}

		}
	}
?>
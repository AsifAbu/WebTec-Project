<?php
	session_start();
	include "header.php";
	require "db.php";
	$un = $_SESSION['username'];
	if($_SESSION['abc']=='123')
	{
		$conn = DBconnection();
        if(!$conn)
        {
            echo "DB Error: ".mysqli_connect_error();
        }
        else
        {
			$sql = "select * from admin where username='".$un."'";
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
?>
        <!DOCTYPE html>
		<html>
		<head>
			<title>AdminPanel</title>
		</head>
		<body>
				<fieldset>
					<legend><?php echo $_SESSION['username']?>'s Profile</legend>
					<form>	
<?php
						echo "Name : ".$dusername."<br/>";
						echo "Gender : ".$dgender."<br/>";
						echo "Phone_Number : ".$dphonenumber."<br/>";
						echo "Gmail : ".$dgmail."<br/>";
						echo "NID_Number : ".$dnidnumber."<br/>";
?>
					</form>
				</fieldset>
		</body>
		</html>
<?php	
	}else{
		header("location: login.php");

	}
	include "footer.php";
?>

	
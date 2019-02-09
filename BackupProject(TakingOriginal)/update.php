<?php
	session_start();
	include "header.php";
	require "db.php";

	$un = $_GET['id'];
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
				$duser = $row['username'];
				$dpassword = $row['password'];
				$dconfirmpassword = $row['confirmpassword'];
				$dgender = $row['gender'];
				$dphonenumber = $row['phonenumber'];
				$dgmail = $row['gmail'];
				$dnidnumber = $row['nidnumber'];

	echo "	<form method='post' action='updateuserc.php?id=$duser' >
				User Name         : <input type='text' name='uname' value=$dusername><br/>
				Password          : <input type='password' name='upassword' value=$dpassword><br/>
				Confirm Password  : <input type='password' name='uconfirmpassword' value=$dconfirmpassword><br/>
				Gender            : <input type='text' name='ugender' value=$dgender><br/>
				Phone Number      : <input type='text' name='uphonenumber' value=$dphonenumber><br/>
				Gmail             : <input type='text' name='ugmail' value=$dgmail><br/>
				NID Number        : <input type='text' name='unidnumber' value=$dnidnumber><br/>

						    		<input type='submit' name='update' value='Update'>
						            
			</form>";

            }
        }
    }
    else
    {
    	header("location: login.php");
    }
    $conn->close();
	include "footer.php";
?>
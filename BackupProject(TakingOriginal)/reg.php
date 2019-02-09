<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invalidinput"){
			echo "Invalid Input! try again...";
		}else if($status == "nullvalue"){
			echo "The Text Fields can't be empty";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>
		<fieldset>
			<legend>Registration</legend>

			<form method="post" action="regCheck.php" >
				<table border="0" align='center' width=60%>
					<tr>
						<td width=25%>User Name: </td>
						<td width= 40%><input size=40% type="text" name="username" id="name" onkeyup="nameCheck()" required></td>
						<td id="namep"></td>
					</tr>
					<tr>
						<td width=25%>Password : </td>
						<td width=40%><input size=40% type="password" name="password" id="password" onkeyup="passwordCheck()" required></td>
						<td id="passwordp"></td>
					</tr>
					<tr>
						<td width=25%>Confirm Password  : </td>
						<td width=40%><input size=40% type="password" name="confirmpassword" id="confirmpassword" onkeyup="cpasswordCheck()" required></td>
						<td id="confirmpasswordp"></td>
					</tr>
					<tr>
						<td width=25%>Gender  :</td>
						<td width= 40%><input type="radio" name="gender" value="male" id="gender" onkeyup="genderCheck()">Male
						            <input type="radio" name="gender" value="female" id="gender" onkeyup="genderCheck()">Female
						            <input type="radio" name="gender" value="other" id="gender" onkeyup="genderCheck()">Other
						</td>
						<td id="genderp"></td>
					</tr>
					<tr>
						<td width=25%>Phone Number :</td>
						<td width=40%><input size=40% type="text" name="phonenumber" id="phonenumber" onkeyup="phonenumberCheck()" required></td>
						<td id="phonenumberp"></td>
					</tr>
					<tr>
						<td width=25%>Gmail :</td>
						<td width=40%><input size=40% type="text" name="gmail" id="gmail" onkeyup="gmailCheck()" required></td>
						<td id="gmailp"></td>
					</tr>
					<tr>
						<td width=25%>NID Number :</td>
						<td width=40%><input size=40% type="text" name="nidnumber" id="nidnumber" onkeyup="nidnumberCheck()" required></td>
						<td id="nidnumberp"></td>
					</tr>

					<tr>
						<td width=25%></td>
						<td align='right'><input type="submit" name="submit" value="Submit" style=" height: 30px; width:50%;"></td>
					</tr>
					<tr>
						<td width=25%></td>
						<td align='right'><a href="login.php">
						    			<input type="button" name="back" value="back" style=" height: 30px; width:50%;">
						    		</a></td>
					</tr>



			</form>
		</fieldset>

		<script>
			function nameCheck()
			{
				var name = document.getElementById("name").value;
				if(name == "")
				{
					document.getElementById("namep").innerHTML = "Name Not Be Empty!!";
					document.getElementById("namep").style.color='red';
				
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
					document.getElementById("passwordp").style.color='red';
				}
				else
				{
					document.getElementById("passwordp").innerHTML = "";
				}
			}
			function cpasswordCheck()
			{
				var cpassword = document.getElementById("confirmpassword").value;
				if(cpassword == "")
				{
					document.getElementById("confirmpasswordp").innerHTML = "Confirm Password Not Be Empty And Should Be Same As Password!!";
					document.getElementById("confirmpasswordp").style.color='red';
				}
				else
				{
					document.getElementById("confirmpasswordp").innerHTML = "";
				}
			}
			function genderCheck()
			{
				var gender = document.getElementById("gender").value;
				if(gender == "")
				{
					document.getElementById("genderp").innerHTML = "Select Any Gender!!";
					document.getElementById("genderp").style.color='red';
				}
				else
				{
					document.getElementById("genderp").innerHTML = "";
				}
			}
			function phonenumberCheck()
			{
				var phonenumber = document.getElementById("phonenumber").value;
				if(phonenumber == "")
				{
					document.getElementById("phonenumberp").innerHTML = "Phone Number Should Be In Correct Formate!!";
					document.getElementById("phonenumberp").style.color='red';
				}
				else
				{
					document.getElementById("phonenumberp").innerHTML = "";
				}
			}
			function gmailCheck()
			{
				var gmail = document.getElementById("gmail").value;
				if(gmail == "")
				{
					document.getElementById("gmailp").innerHTML = "Gmail Should be in Correct Formate!!";
					document.getElementById("gmailp").style.color='red';
				}
				else
				{
					document.getElementById("gmailp").innerHTML = "";
				}
			}
			function nidnumberCheck()
			{
				var nidnumber = document.getElementById("nidnumber").value;
				if(nidnumber == "")
				{
					document.getElementById("nidnumberp").innerHTML = "NID Must Be 13 Digit!!";
					document.getElementById("nidnumberp").style.color='red';
				}
				else
				{
					document.getElementById("nidnumberp").innerHTML = "";
				}
			}


		</script>

</body>
</html>
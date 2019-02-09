<?php
	error_reporting(0);
	if($_SESSION['abc']=='123')
	{
?>
<table align="center">
	<tr >
		<td><a href="home.php" >HOME	</a> | </td>
		<td><a href="logout.php" >SIGNOUT	</a> | </td>
		<td><a href="profile.php" >PROFILE	</a> </td>
	</tr>
</table>
<?php
	}
	else
	{
?>
<table align="right">
	<tr >
		<td><a href="reg.php" > SIGNUP</a> 	</td>
	</tr>
</table>
<?php
	}
?>
<?php echo "</br>"; ?>
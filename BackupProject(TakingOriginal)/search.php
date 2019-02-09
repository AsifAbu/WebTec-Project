<?php
	require "db.php";
	session_start();
	$key 	= $_POST['key'];
	$con=DBconnection();
	$sql = "select * from admin where username like '".$key."%'";
	$result = mysqli_query($con,$sql);
	
	echo "
					</br>
					</br>
					<table border='1' align='center'>
					
							<tr align='center'>
								<td align='center'>Name</td>
								<td align='center'>Gender</td>
								<td align='center'>Phone Number</td>
								<td align='center'>Gmail</td>
								<td align='center'>NID Number</td>
								<td align='center'>Action</td>
							
							</tr>";
							
					
							while($row= mysqli_fetch_assoc($result))
							{
								echo "	<tr align='center'>";
								
											$s=$row['username'];
								echo "		<td>".$s."</td>
											<td>".$row['gender']."</td>
											<td>".$row['phonenumber']."</td>
											<td>".$row['gmail']."</td>
											<td>".$row['nidnumber']."</td>
											<td>
												<a href='delete.php?id=".$s."'>
													<input type='button' name='delete' value='Delete'>
												<a/>
												<a href='update.php?id=".$s."'>
													<input type='button' name='edit' value='Edit'>
												<a/>
											</td>
										
										</tr>";
							    
				            }
					echo "</table>";
	
?>
<?php
	require "db.php";
	session_start();
	$key 	= $_POST['key'];
	$tname = trim($_SESSION['tname']);
	$con=DBconnection();
	$sql = "select * from ".$tname." where title like '".$key."%'";
	$result = mysqli_query($con,$sql);
	
	echo "
		</br>
		</br>
		<table border='1' align='center'>
		
				<tr align='center'>
					<td align='center'>ID</td>
					<td align='center'>Category</td>
					<td align='center'>Brand</td>
					<td align='center'>Title</td>
					<td align='center'>Price</td>
					<td align='center'>Size</td>
					<td align='center'>Quantity</td>
					<td align='center'>Description</td>
					<td align='center'>Image</td>
				
				</tr>";
				
		
				while($row= mysqli_fetch_assoc($result))
				{
					echo "	<tr align='center'>";
					
								$s=$row['id'];
								$category=$row['category'];
					echo "		<td>".$s."</td>
								<td>".$row['category']."</td>
								<td>".$row['brand']."</td>
								<td>".$row['title']."</td>
								<td>".$row['price']."</td>
								<td>".$row['size']."</td>
								<td>".$row['quantity']."</td>
								<td>".$row['description']."</td>
								<td><img src='".$row['image']."' width='80px' height='80px'/></td>
								<td>
									<a href='deleteproduct.php?id=".$s."&category=".$category."'>
										<input type='button' name='delete' value='Delete'>
									<a/>
									<a href='updateproduct.php?id=".$s."&category=".$category."'>
										<input type='button' name='edit' value='Edit'>
									<a/>
								</td>
							
							</tr>";
				    
	            }
		echo "</table>";
	
?>
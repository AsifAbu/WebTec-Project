	<!DOCTYPE html>
	<html>
	<head>
		<title>AdminPanel</title>
	</head>
	<body>
<?php
	session_start();
	include "header.php";
	require "db.php";
	if($_SESSION['abc']=='123')
	{
		$id=$_GET['id'];
		$category = $_GET['category'];
		$conn = DBconnection();
		$sql = "select * from ".$category." where id=".$id;
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result))
		{
			$did = $row['id'];
			$dcategory = $row['category'];
			$dbrand = $row['brand'];
			$dtitle = $row['title'];
			$dprice = $row['price'];
			$dsize = $row['size'];
			$dquantity = $row['quantity'];
			$ddescription = $row['description'];
			$dimage = $row['image'];

			echo "
				<form method='post' action='addproductcheck.php'>
				</br></br>
					<table border='1' align='center' width=99%>
						<tr>
							<td width=30%>Product Id :</td>
							<td width= 30%><input size=30% type='text' name='productid' id='productid' value=$did required></td>
							<td id='productid' width='45%'></td>		    	
						</tr>
						<tr>
							<td width=30%>Category: </td>
							<td>
								<input size=30% type='text' placeholder='Enter Category' name='category' id='category' value=$dcategory required>
							</td>
							<td id='catagoryp'></td>				
						</tr>
						<tr>
							<td width=30%>Product Brand: </td>
							<td width=30%><input size=30% type='text' placeholder='Enter brand' name='productbrand' id='productbrand' value='$dbrand' required></td>
							<td id='productbrandp'></td>
						</tr>
						<tr>
							<td width=30%>Product Title: </td>
							<td width=30%><input size=30% type='text' placeholder='Enter Title' name='producttitle' id='producttitle' value='$dtitle' required>
							</td>
							<td id='producttitlep'></td>
						</tr>
						<tr>
							<td width=30%>Product Price: </td>
							<td width=30%><input size=30% type='text' placeholder='Enter price' name='productprice' id='productprice' value='$dprice' required></td>
							<td id='productpricep'></td>
						</tr>
						<tr>
							<td width=30%>Product Size: </td>
							<td width=30%><input size=30% type='text' placeholder='product size' name='productsize' id='productsize' value='$dsize' required>
							</td>
							<td id='productsizep'></td>
						</tr>
						<tr>
							<td width=30%>Product Quantity: </td>
							<td width=30%><input size=30% type='text' placeholder='product quantity' name='productquantity' id='productquantity' value='$dquantity' required></td>
							<td id='productquantityp'></td>
						</tr>
						<tr>
							<td width=30%>Product Description: </td>
							<td width=30% height='20%'><input height='20%' size=30% type='text' placeholder='product Description' name='productdescription' id='productdescription' value='$ddescription' required></td>
							<td id='productdescriptionp'></td>
						</tr>
						<tr>
							<td></td>
							<td width='15%' align='right'>
								<a href='addproductcheck.php?id=update'>
					    			<input type='submit' name='submit' value='Update Product'>
					    		</a>
							</td>
							<td></td>
						</tr>
					</table>
			    </form>";
			}
?>
	</body>
	</html>
<?php

	}
	else
	{
		header("location: login.php");

	}
	include "footer.php";
?>
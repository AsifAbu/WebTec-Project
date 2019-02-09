<?php
	session_start();
	include "header.php";
	
	if($_SESSION['abc']=='123')
	{
		$username = $_SESSION['username'];
		if($username[0]=="A")
		{
			$d2 = new Datetime("now");
			//echo $d2->format('U');" 
?>

<!DOCTYPE html>
<html>
<head>
	<title>AdminPanel</title>
</head>
<body>
	<fieldset>
		<legend>Wellcome <?php echo $_SESSION['username'] ?></legend>
		<form method="post" action="viewproduct.php" >
			<table border="1" align='right' width=15%>
			<tr align="right">
				<td>
					<select id="categoryview" name="categoryview">
						  <option value="mencloth" name ="menclothview">Men Cloth</option>
						  <option value="menshoe" name ="menshoeview" autofocus>Men Shoe</option> 
						  <option value="mencosmetic" name ="mencosmeticview">Men Cosmetic</option>
						  <option value="kidscloth" name ="kidsclothview">Kids Cloth</option>
						  <option value="kidsshoe" name ="kidsshoeview">Kids Shoe</option>
						  <option value="kidscosmetic" name ="kidscosmeticview">Kids Cosmetic</option>
						  <option value="womencloth" name ="womenclothview">Women Cloth</option>
						  <option value="womenshoe" name ="womenshoeview">Women Shoe</option>
						  <option value="womencosmetic" name ="womencosmeticview">Women Cosmetic</option>
					</select>
				</td>
				<td width=10% align="right">
					<a href="viewproduct.php">
		    			<input type="submit" name="viewproduct" value="View Product">
		    		</a>
		    	</td>
			</tr>
			<tr align="right">
				<td></td>
				<td width=15% align="right">
		    		<a href="viewuserlist.php?status=one">
		    			<input type="button" name="viewuserlist" value="View User List">
		    		</a>
		    	</td>
			</tr>

		</form>

		<form method="post" action="addproductcheck.php">
		<table border="1" align='center' width=99%>
			<tr>
				<td width=30%>Product Id :</td>
				<td width= 30%><input size=30% type="text" name="productid" id="productid" value="<?php $d2 ?>" required></td>
				<td id="productid" width="45%"></td>		    	
			</tr>
			<tr>
				<td width=30%>Select Category: </td>
				<td>
					<select id="category" name="category">
						  <option value="mencloth" name ="mencloth">Men Cloth</option>
						  <option value="menshoe" name ="menshoe">Men Shoe</option>
						  <option value="mencosmetic" name ="mencosmetic">Men Cosmetic</option>
						  <option value="kidscloth" name ="kidscloth">Kids Cloth</option>
						  <option value="kidsshoe" name ="kidsshoe">Kids Shoe</option>
						  <option value="kidscosmetic" name ="kidscosmetic">Kids Cosmetic</option>
						  <option value="womencloth" name ="womencloth">Women Cloth</option>
						  <option value="womenshoe" name ="womenshoe">Women Shoe</option>
						  <option value="womencosmetic" name ="womencosmetic">Women Cosmetic</option>
					</select>
				</td>
				<td id="productcatagoryp"></td>				
			</tr>
			<tr>
				<td width=30%>Product Brand: </td>
				<td width=30%><input size=30% type="text" placeholder="Enter brand" name="productbrand" id="productbrand" required></td>
				<td id="productbrandp"></td>
			</tr>
			<tr>
				<td width=30%>Product Title: </td>
				<td width=30%><input size=30% type="text" placeholder="Enter Title" name="producttitle" id="producttitle" required>
				</td>
				<td id="producttitlep"></td>
			</tr>
			<tr>
				<td width=30%>Product Price: </td>
				<td width=30%><input size=30% type="text" placeholder="Enter price" name="productprice" id="productprice" required></td>
				<td id="productpricep"></td>
			</tr>
			<tr>
				<td width=30%>Product Size: </td>
				<td width=30%><input size=30% type="text" placeholder="product size" name="productsize" id="productsize" required>
				</td>
				<td id="productsizep"></td>
			</tr>
			<tr>
				<td width=30%>Product Quantity: </td>
				<td width=30%><input size=30% type="text" placeholder="product quantity" name="productquantity" id="productquantity" required></td>
				<td id="productquantityp"></td>
			</tr>
			<tr>
				<td width=30%>Product Description: </td>
				<td width=30% height="20%"><input height="20%" size=30% type="text" placeholder="product Description" name="productdescription" id="productdescription" required></td>
				<td id="productdescriptionp"></td>
			</tr>
			<tr>
				<td width=30%>Product Image: </td>
				<td width=30%><input size=30% type="file" name="productimage" id="productimage" required></td>
			</tr>
			<tr>
				<td></td>
				<td width="15%" align="right">
					<a href="addproductcheck.php?id=add">
		    			<input type="submit" name="submit" value="Add Product">
		    		</a>
				</td>
				<td></td>
			</tr>
		</table>
	    </form>
	</fieldset>
</body>
</html>

<?php
		}
		else
		{
			header("location: viewuserlist.php?status=one");
		}
	}
	else
	{
		header("location: login.php");
	}
	include "footer.php";
?>

	
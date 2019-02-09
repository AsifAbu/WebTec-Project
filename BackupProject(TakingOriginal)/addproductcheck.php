<?php
	session_start();
	include "header.php";
	require "db.php";
	$allfieldok = false;
	if($_SESSION['abc']=='123')
	{
		if($_GET['id'] == 'update')
		{
			//delete the previous file and re insert current file
		}
		else if(isset($_POST['submit']))
		{
			$productid = $_POST['productid'];
			$category = trim($_POST['category']);
			$productbrand = $_POST['productbrand'];
			$producttitle   = $_POST['producttitle'];
			$productprice = $_POST['productprice'];
			$productsize = $_POST['productsize'];
			$productquantity = $_POST['productquantity'];
			$productdescription = $_POST['productdescription'];
			$productimage = $_POST['productimage'];

			$productidflag = false;
			$categoryflag = false;
			$productbrandflag = false;
			$producttitleflag   = false;
			$productpriceflag = false;
			$productsizeflag = false;
			$productquantityflag = false;
			$productdescriptionflag = false;
			$productimageflag = false;

			if($productid != "")
			{
				$productidflag = true;
			}
			else
			{
				$productidflag = false;
				header("location: home.php?status=idempty");
			}

			if($category != "")
			{
				$categoryflag = true;
			}
			else
			{
				$categoryflag = false;
				header("location: home.php?status=categoryempty");
			}

			if($productbrand != "")
			{
				$productbrandflag = true;
			}
			else
			{
				$productbrandflag = false;
				header("location: home.php?status=brandempty");
			}

			if($producttitle != "")
			{
				$producttitleflag = true;
			}
			else
			{
				$producttitleflag = false;
				header("location: home.php?status=titleempty");
			}

			if($productprice != "")
			{
				$productpriceflag = true;
			}
			else
			{
				$productpriceflag = false;
				header("location: home.php?status=priceempty");
			}

			if($productsize != "")
			{
				$productsizeflag = true;
			}
			else
			{
				$productsizeflag = false;
				header("location: home.php?status=sizeempty");
			}

			if($productquantity != "")
			{
				$productquantityflag = true;
			}
			else
			{
				$productquantityflag = false;
				header("location: home.php?status=quantityempty");
			}

			if($productdescription != "")
			{
				$productdescriptionflag = true;
			}
			else
			{
				$productdescriptionflag = false;
				header("location: home.php?status=descriptionempty");
			}

			if($productimage != "")
			{
				$productimageflag = true;
			}
			else
			{
				$productimageflag = false;
				header("location: home.php?status=imageempty");
			}

			if($productidflag && $categoryflag && $productbrandflag && $producttitleflag && $productpriceflag && $productsizeflag && $productquantityflag && $productdescriptionflag)
			{
				$allfieldok = true;
			}
			else
			{
				$allfieldok = false;
			}




			//sob varification eikhane korte hobe
			//varification korar por $allfileok variable er value again initializze korte hobe..

			if($allfieldok)
			{
				$conn = DBconnection();
	            if(!$conn)
	            {
	                echo "DB Error: ".mysqli_connect_error();
	            }else
	            {
	                $sql = "INSERT into ".$category." values('','$category','$productbrand','$producttitle','$productprice','$productsize','$productquantity','$productdescription','$productimage')";
	                $result = mysqli_query($conn, $sql);
					header("location: home.php?status=successfully_added_product-----".$category);
	            }
			}
			else
			{
				header("location: home.php?status=Product_not_added---".$productidflag."".$category."".$productbrandflag."".$producttitleflag."".$productpriceflag."".$productsizeflag."".$productquantityflag."".$productdescriptionflag."".$productimageflag.">>".$allfieldok);
			}
		}
		else
		{
			header("location: home.php?status=Not_add_button_clicked");
		}
	}
	else
	{
		header("location: login.php?status=sessionout");
	}
	include "footer.php";
		
?>	

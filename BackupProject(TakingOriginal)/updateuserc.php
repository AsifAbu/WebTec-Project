<?php
	session_start();
    include "header.php";
    require "db.php";
    $duser = $_GET['id'];
    //echo  "Name = ".$un;
    if($_SESSION['abc']=='123')
    {
        $connd = DBconnection();
        if(!$connd)
        {
            echo "DB Error: ".mysqli_connect_error();
        }
        else
        {
            $dusername = trim($_POST['uname']);
            $dpassword = $_POST['upassword'];
            $dconfirmpassword = $_POST['uconfirmpassword'];
            $dgender = $_POST['ugender'];
            $dphonenumber = $_POST['uphonenumber'];
            $dgmail = $_POST['ugmail'];
            $dnidnumber = $_POST['unidnumber'];
            if($dusername == "" || $dpassword=="" || $dgender=="" || $dgmail=="" || $dphonenumber=="" || $dnidnumber=="")
            {
                header("location: viewuserlist.php?status=SomeValueIsNULL".$dgender);
            }
            else
            {
                $sqld= "delete from admin where username='".$duser."'";
                $resultd = mysqli_query($connd, $sqld);
                $connd->close();
                //$rowd = mysqli_fetch_assoc($resultd);
            }
      
        }
        
           
        $usernameflag = false;
        $passwordflag = false;
        $gmailflag = false;
        $nidnumberflag = false;
        $phonenumberflag =false;

        if(is_numeric($dusername[0]))
        {
        	$usernameflag = false;
        }
        else if(!$dusername == "")
        {
            $usernameflag = true;
        }
        else
        {
        	$usernameflag = true;
        }

		if(strlen($dphonenumber) == 11 && $dphonenumber[0] == 0 && $dphonenumber[1] == 1)
		{
			if($dphonenumber[2] == 5 || $dphonenumber[2] == 6 || $dphonenumber[2] == 7 || $dphonenumber[2] == 8 || $dphonenumber[2] == 9)
			{
				$phonenumberflag=true;
			}
			else
			{
				$phonenumberflag=false;
			}
		}
        else if(strlen($dphonenumber) == 14 && $dphonenumber[0] == 0 && $dphonenumber[1] == 1)
        {
        	if($dphonenumber[2] == 5 || $dphonenumber[2] == 6 || $dphonenumber[2] == 7 || $dphonenumber[2] == 8 || $dphonenumber[2] == 9)
			{
				$phonenumberflag=true;
			}
			else
			{
				$phonenumberflag=false;
			}
        }
        else
        {
        	$phonenumberflag=false;
        }

        if(preg_match('|^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$|i', $dgmail))
        {
        	$gmailflag=true;
        }
        else
        {
        	$gmailflag=false;
        }

        if($dpassword == $dconfirmpassword)
        {
        	$passwordflag = true;
        }
        else
        {
        	$passwordflag = false;
        }

        if(strlen($dnidnumber) == 13 && is_numeric ($dnidnumber))
        {
        	$nidnumberflag = true;
        }
        else
        {
        	$nidnumberflag = false;
        }


		if($dpassword=="" || $dgender=="" || $dgmail=="" || $dphonenumber=="" || $dnidnumber=="")
		{
            header("location: viewuserlist.php?status=SomeValueIsNULL".$dgender);
		}
		else if($usernameflag && $passwordflag && $nidnumberflag && $gmailflag && $phonenumberflag)
		{
            $conn = DBconnection();
            if(!$conn)
            {
                echo "DB Error: ".mysqli_connect_error();
            }else
            {
                $sql = "insert into admin values('$dusername','$dpassword','$dconfirmpassword','$dgender','$dphonenumber','$dgmail','$dnidnumber')";
                $result = mysqli_query($conn, $sql);
                header("location: viewuserlist.php?status=SuccessfullyUpdated_".$duser."-To-".$dusername);
            }
		}
		else
		{
			header("location: updateuserc.php?status=invalidinput_".$dusername);
		}
	}
	$conn->close();
	include "footer.php";
?>
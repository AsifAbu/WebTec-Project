<?php
	require "db.php"; 


	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$gender   = $_POST['gender'];
		$phonenumber = $_POST['phonenumber'];
		$gmail = strtolower($_POST['gmail']);
		$nidnumber = $_POST['nidnumber'];

        $usernameflag = false;
        $passwordflag = false;
        $phonenumberflag = false;
        $gmailflag = false;
        $nidnumberflag = false;
   		
        if(is_numeric($username[0]))
        {
        	$usernameflag = false;
        }
        else
        {
        	$usernameflag = true;
        }

		if(strlen($phonenumber) == 11 && $phonenumber[0] == 0 && $phonenumber[1] == 1)
		{
			if($phonenumber[2] == 5 || $phonenumber[2] == 6 || $phonenumber[2] == 7 || $phonenumber[2] == 8 || $phonenumber[2] == 9)
			{
                if(is_numeric($phonenumber))
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
		}
        else if(strlen($phonenumber) == 14 && $phonenumber[0] == 0 && $phonenumber[1] == 1)
        {
        	if($phonenumber[2] == 5 || $phonenumber[2] == 6 || $phonenumber[2] == 7 || $phonenumber[2] == 8 || $phonenumber[2] == 9)
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

        /*if(preg_match('|^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$|i', $gmail))
        {
        	$gmailflag=true;
        }
        else
        {
        	$gmailflag=false;
        }*/

        if($password == $confirmpassword)
        {
        	$passwordflag = true;
        }
        else
        {
        	$passwordflag = false;
        }

        if(strlen($nidnumber) == 13 && is_numeric ($nidnumber))
        {
        	$nidnumberflag = true;
        }
        else
        {
        	$nidnumberflag = false;
        }


        $l=strlen($gmail);
        for($i = 0; $i < $l;$i++)
        {
        	if($gmail[$i] == "@")
        	{
        		$take=$i;
                $n=$l-$i;
                if($n > 1 && $take > 0)
                {
                    for($j = 0; $j<$n;$j++)
                    {
                        if($gmail[$j] == ".")
                        {
                            $takedot = ($take+$j)-$l;
                            if($takedot > 1)
                            {
                                $gmailflag=true;
                            }
                            else
                            {
                                $gmailflag=false;
                            }
                        }
                        else
                        {
                            $gmailflag=false;
                            $j=$j+1;
                        }
                    }
                }
                else
                {
                    $gmailflag=false;
                }
        	}
        	else
        	{
                $i = $i+1;
        	}
        }


        if($username == "")
        {
            header("location: reg.php?status=nullusername");
        }
        if($password == "")
        {
            header("location: reg.php?status=nullpassword");
        }
        if($confirmpassword == "")
        {
            header("location: reg.php?status=nullconfirmpassword");
        }
        if($gender == "")
        {
            header("location: reg.php?status=nullgender");
        }
        if($phonenumber == "")
        {
            header("location: reg.php?status=nullphonenumber");
        }
        if($gmail == "")
        {
            header("location: reg.php?status=nullgmail");
        }
        if($nidnumber == "")
        {
            header("location: reg.php?status=nullnidnumber");
        }
		else if($usernameflag && $passwordflag && $nidnumberflag && $phonenumberflag )
		{

            $conn = DBconnection();
            if(!$conn)
            {
                echo "DB Error: ".mysqli_connect_error();
            }else
            {
                $sql = "INSERT into admin values('$username','$password','$confirmpassword','$gender','$phonenumber','$gmail','$nidnumber')";
                $result = mysqli_query($conn, $sql);
                header("location: login.php");
            }
		}
		else
		{
			header("location: reg.php?status=invalidinput");
		}
	}
?>
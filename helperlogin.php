<?php

$conn=mysqli_connect('localhost','root','','miniu');
if($conn)
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$conf_password=$_POST['conf_password'];
	if ($username=="" || $password=="" || $conf_password=="") 
	{
		echo "incomplete details";
		exit();
	}
	else
	{
		if ($password==$conf_password) 
		{
			$query="INSERT INTO minisignup VALUES(NULL,'$username','$password')";
			$exec_query=mysqli_query($conn,$query);
			if ($exec_query) 
			{
				session_start();
				$_SESSION['username']=$username;
				header("Location: profile.php");
			}
			else
			{
				echo "Error occured";
			}
		}
		else
		{
			echo "please confirm password";
		}
	}
}
?>
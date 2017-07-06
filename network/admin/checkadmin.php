<?php
	$admin=$_POST['admin'];
	$password=$_POST['password'];
	$db=mysql_connect("localhost","root","admin");
	if($admin=="")
	{
		echo "<script type='text/javascript'>alert('Please input the admin');</script>";
	}
	else if ($password=="")
	{
		echo "<script type='text/javascript'>alert('Please input the password');</script>";
	}
	else
	{
		$query  =  "SELECT password FROM admin WHERE admin='$admin'";
		if ($query==$password)
		{
			echo "<script type='text/javascript'>alert('successfully log in');location='admin.html';</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('wrong password');location='loginadmin.php';</script>";
		}
	}
?>

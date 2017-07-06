<!DOCTYPE html>
<html>
<head>
	<title>check it first</title>
</head>
<body>
<?php
	if(!$_POST['username'])
	{
		echo "<script type='text/javascript'>alert('Please input your username');location='login.php';</script>";
	}

	if (!$_POST['password']&&$_POST['username'])
	{
		echo "<script type='text/javascript'>alert('Please input your password');location='login.php';</script>";
	}
	$name=$_POST['username'];
	$password=$_POST['password'];
	$conn=mysql_connect('localhost','root','') or die("Cannot connect to the database!");
	mysql_select_db('question');
	$query="SELECT password from user WHERE username='$name'";
	$result=mysql_query($query,$conn);
	$num=mysql_num_rows($result);
	if ($num)
	{
		$row=mysql_fetch_array($result);

   			if($password===$row['password']){

   				echo "<script type='text/javascript'>alert('successfully log in');location='welcome.php';</script>";

    			}else{

			echo "<script type='text/javascript'>alert('wrong password');location='login.php';</script>";

		}

	}else{

		echo "<script type='text/javascript'>alert('username is not exist,Please register first!');location='login.php';</script>";

	}
	
?>
</body>
</html>
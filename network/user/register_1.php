<!DOCTYPE html>
<html>
<head>
Thank you!
</head>
<body>
<a href="login.php">
if it is not jump,please click here.
</a>
<?php 
	$username=$_POST['username'];
	$password=$_POST['password'];
	$pwd_again=$_POST['pwd_again'];
	$conn=mysql_connect('localhost','root','') or die("Cannot connect to the database!");
	mysql_select_db('question');
	if ($password==""||$username=="")
	{
		echo "<script type='text/javascript'>alert('username or password cannot be blank!');location='register.php';</script>";
	}
	else
	{
		if ($password!=$pwd_again)
		{
			echo "<script type='text/javascript'>alert('two password is not equal,please input it again~!');location='register.php';</script>";
		}
		else 
		{
			$query="SELECT username from user where username='$username'";
			$result=mysql_query($query,$conn);
			if($result)
			{
				echo "<script type='text/javascript'>alert('The username is be used , please change it!');location='register.php';</script>";
			}
			else{
				$query="INSERT into user(username,password) values('$username','$password')";
				$result=mysql_query($query,$conn);
				if (!$result)
				{
					echo "<script type='text/javascript'>alert('Cannot register, please try again or ask me!');location='register.php';</script>";
				}
				else 
					echo "<script type='text/javascript'>alert('register successfully!');location='login.php';</script>";
			}
		}
	}
?>
</body>
</html>
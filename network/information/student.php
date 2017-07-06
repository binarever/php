<!DOCTYPE html>
<html>
<head>
	<title>have a look</title>
</head>
<body>
<?php
	$name=addslashes($_POST['name']);
	$stunum=addslashes($_POST['stunum']);
	$club=addslashes($_POST['club']);
	$day=addslashes($_POST['date']);
	$sex=addslashes($_POST['sex']);
	$phone=addslashes($_POST['phone']);
	$email=addslashes($_POST['email']);

	$conn=mysql_connect('localhost','root','') or die("Cannot connect to the database!");
	mysql_select_db('question');

	if($name&&$stunum&&$club&&$day&&$phone&&$sex&&$email&&$phone){

		$query="INSERT into stuclub(name,stunum,club,day,sex,phone,email) values ('$name','$stunum','$club','$day','$sex','$phone','$email')";

		$result = mysql_query($query,$conn);

		if($result)
		{
			echo "<script type='text/javascript'>alert('insert your information successfully!Congratulations!');location='stuinfo.php';</script>";
		}	
		else
		{
			echo "<script type='text/javascript'>alert('insert your information fail,sorry,please try again!');location='stuclub.html';</script>";
		}
	}
	else{
		echo "<script type='text/javascript'>alert('you must input all the blank!');location='stuclub.html';</script>";
	}	
?>
</body>
</html>